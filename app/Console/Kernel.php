<?php

namespace App\Console;
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

      $schedule->command('echo hello')->everyMinute()->appendOutputTo('/var/www/cron.txt');
//        $schedule->call(function() {
//          $tomorrow = Carbon::now()->addDay()->format('d/m/Y');
//          $afterTomorrow = Carbon::now()->addDays(2)->format('d/m/Y');
//
//
//          $this->makeSchedule($tomorrow);
//          $this->makeSchedule($afterTomorrow);
//
//        })->daily();
//
//        $schedule->call(function () {
//          $date = Carbon::now()->format('d/m/Y');
//
//         $this->makeSchedule($date);
//
//
//        })->everyMinute();
        // $schedule->command('inspire')
        //          ->hourly();
    }

    protected function getSchedule($date) {
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

    protected function makeSchedule($date) {
      $schedule = \App\Schedule::where('date', $date)->first();
      if (!$schedule) {
        $schedule = new \App\Schedule();
      }

      $res =  $this->getSchedule($date);

      $schedule->date = $date;
      $schedule->content = $res['en']->getBody()->getContents();
      $schedule->content_ar = $res['ar']->getBody()->getContents();

      $schedule->save();
    }
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
