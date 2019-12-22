<?php

namespace App\Http\Controllers;

use App\Schedule;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
  public function index(Request $request)
  {

    $request->validate(['date' => 'required']);

    $date = $request->date;


    $schedule = Schedule::where('date', $date)->first();
    if (!$schedule) {
      $client = new Client();
      $res = $client->request(
        'GET',
        "http://tv.sawadland.com:8999/https://webws.365scores.com/web/games/?langId=1&timezoneName=Asia/Baghdad&userCountryId=-1&appTypeId=5&sports=1&startDate=$date&endDate=$date",
        ['headers' => ['origin' => 'http://' . $request->getHost()]]
      );

      $resAr = $client->request(
        'GET',
        "http://tv.sawadland.com:8999/https://webws.365scores.com/web/games/?langId=27&timezoneName=Asia/Baghdad&userCountryId=-1&appTypeId=5&sports=1&startDate=$date&endDate=$date",
        ['headers' => ['origin' => 'http://' . $request->getHost()]]
      );


      $schedule = new Schedule();
      $schedule->date = $date;
      $schedule->content = $res->getBody()->getContents();
      $schedule->content_ar = $resAr->getBody()->getContents();

      $schedule->save();
    }



    return response()->json(['date' => $date, 'schedule' => json_decode($schedule->content), 'schedule_ar' => json_decode($schedule->content_ar)]);
  }
}
