<?php

namespace App\Console\Commands;

use App\Schedule;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class GetSchedule extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'get:schedule';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Get TV Schedule from 360score';

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
    $date = Carbon::now()->format('d/m/Y');
    $this->makeSchedule($date);
  }

  protected function makeSchedule($date)
  {
    $schedule = Schedule::where('date', $date)->first();
    if (!$schedule) {
      $schedule = new Schedule();
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
    echo "getting schedule(en)...";
    $en = $client->request(
      'GET',
      "http://tv.sawadland.com:8999/https://webws.365scores.com/web/games/?langId=1&timezoneName=Asia/Baghdad&userCountryId=-1&appTypeId=5&sports=1&startDate=$date&endDate=$date",
      ['headers' => ['origin' => 'http://' . $host]]
    );
    echo "done\n";

    echo "getting schedule(ar)...";
    $ar = $client->request(
      'GET',
      "http://tv.sawadland.com:8999/https://webws.365scores.com/web/games/?langId=27&timezoneName=Asia/Baghdad&userCountryId=-1&appTypeId=5&sports=1&startDate=$date&endDate=$date",
      ['headers' => ['origin' => 'http://' . $host]]
    );
    echo "done\n";


    return ['en' => $en, 'ar' => $ar];
  }
}
