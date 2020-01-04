<?php

namespace App\Console\Commands;

use App\TvChannelProgramsTable;
use App\TvGuideChannel;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class GetGuide extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'get:guide';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Get TV Guide from OSN';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    $client = new Client();

    $channels = TvGuideChannel::all();

    TvChannelProgramsTable::query()->delete();

    $date = $this->makeDate();

    foreach ($channels as $channel) {
      $res = $this->getChannelProgramsTable($client, [
        'channelCode' => $channel->channel_code,
        'hoursForMobile' => 12,
        'isMobile' => false,
        'newDate' => $date,
        'selectedCountry' => 'IQ'
      ]);

      foreach ($res as $item) {
        echo "getting $channel->name / $item->Title...\n";
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
}
