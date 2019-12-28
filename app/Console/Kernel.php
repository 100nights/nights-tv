<?php

namespace App\Console;

use App\TvChannelProgramsTable;
use App\TvGuideChannel;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
  /**
   * The Artisan commands provided by your application.
   *
   * @var array
   */
  protected $commands = [
    //
  ];

  protected function schedule(Schedule $schedule)
  {
    $schedule->call(function () {
      $tomorrow = Carbon::now()->addDay()->format('d/m/Y');
      $afterTomorrow = Carbon::now()->addDays(2)->format('d/m/Y');

      $this->makeSchedule($tomorrow);
      $this->makeSchedule($afterTomorrow);

    })->daily();

    $schedule->call(function () {
      $date = Carbon::now()->format('d/m/Y');
      $this->makeSchedule($date);
    })->everyMinute();

    $client = new Client();

    $schedule->call(function () use ($client) {
      $channels = TvGuideChannel::all();
      TvChannelProgramsTable::query()->delete();
      $dates = [
        $this->makeDate(),
        $this->makeDate(1),
        $this->makeDate(2),
        $this->makeDate(3),
        $this->makeDate(4),
        $this->makeDate(5),
        $this->makeDate(6),
        $this->makeDate(7)
      ];

      foreach ($dates as $date) {
        foreach ($channels as $channel) {
          $res = $this->getChannelProgramsTable($client, [
            'channelCode' => $channel->channel_code,
            'hoursForMobile' => 12,
            'isMobile' => false,
            'newDate' => $date,
            'selectedCountry' => 'IQ'
          ]);

          foreach ($res as $item) {
            $channelProgramsTable = new TvChannelProgramsTable();

            $channelProgramsTable->duration_time = $this->dateToTimestamp($item->Durationtime);
            $channelProgramsTable->date = $date;
            $channelProgramsTable->channel_code = $item->ChannelCode;
            $channelProgramsTable->is_playing = $item->IsPlaying;
            $channelProgramsTable->start_minute = $item->StartMinute;
            $channelProgramsTable->end_minute = $item->EndMinute;
            $channelProgramsTable->empty_div_width = $item->EmptyDivWidth;
            $channelProgramsTable->total_div_width = $item->TotalDivWidth;
            $channelProgramsTable->is_today_date = $item->IsTodayDate;
            $channelProgramsTable->is_last_row = $item->IsLastRow;
            $channelProgramsTable->start_date_time = $this->dateToTimestamp($item->StartDateTime);
            $channelProgramsTable->end_date_time = $this->dateToTimestamp($item->EndDateTime);
            $channelProgramsTable->title = $item->Title;
            $channelProgramsTable->title_ar = $item->Arab_Title;
            $channelProgramsTable->genre = $item->GenreEnglishName;
            $channelProgramsTable->genre_ar = $item->GenreArabicName;
            $channelProgramsTable->channel_number = $item->ChannelNumber;
            $channelProgramsTable->duration = $this->dateToTimestamp($item->Duration);
            $channelProgramsTable->showtime = $this->dateToTimestamp($item->Showtime);
            $channelProgramsTable->episode_id = $item->EpisodeId;
            $channelProgramsTable->program_type = $item->ProgramType;
            $channelProgramsTable->epguniqid = $item->EPGUNIQID;

            $channelProgramsTable->save();
          }
        }
      }
    })->daily();
  }

  protected function makeDate($day = 0)
  {
    return Carbon::now()->addDays($day)->timezone('Asia/Baghdad')->format('m/d/Y');
  }

  protected function dateToTimestamp($dateString)
  {
    if (!$dateString) {
      return null;
    }

    $timestamp = preg_replace('/[^0-9]/', '', $dateString);

    return Carbon::createFromTimestamp($timestamp / 1000, 'Asia/Baghdad')->format('Y-m-d H:i:s');
  }

  protected function getChannelProgramsTable(Client $client, array $params)
  {
    $res = $client->request(
     'POST',
     'https://www.osn.com/CMSPages/TVScheduleWebService.asmx/GetTVChannelsProgramTimeTable',
      ['json' => $params]
    );

    $res = json_decode($res->getBody()->getContents());
    $res = json_decode($res->d);
    return $res;
  }

  protected function makeSchedule($date)
  {
    $schedule = \App\Schedule::where('date', $date)->first();
    if (!$schedule) {
      $schedule = new \App\Schedule();
    }

    $res = $this->getSchedule($date);

    $schedule->date = $date;
    $schedule->content = $res['en']->getBody()->getContents();
    $schedule->content_ar = $res['ar']->getBody()->getContents();

    $schedule->save();
  }

  protected function getSchedule($date)
  {
    $host = Request()->getHost();
    $client = new Client();
    $en = $client->request(
      'GET',
      "http://tv.sawadland.com:8999/https://webws.365scores.com/web/games/?langId=1&timezoneName=Asia/Baghdad&userCountryId=-1&appTypeId=5&sports=1&startDate=$date&endDate=$date",
      ['headers' => ['origin' => 'http://' . $host]]
    );

    $ar = $client->request(
      'GET',
      "http://tv.sawadland.com:8999/https://webws.365scores.com/web/games/?langId=27&timezoneName=Asia/Baghdad&userCountryId=-1&appTypeId=5&sports=1&startDate=$date&endDate=$date",
      ['headers' => ['origin' => 'http://' . $host]]
    );


    return ['en' => $en, 'ar' => $ar];
  }

  /**
   * Register the commands for the application.
   *
   * @return void
   */
  protected function commands()
  {
    $this->load(__DIR__ . '/Commands');

    require base_path('routes/console.php');
  }
}
