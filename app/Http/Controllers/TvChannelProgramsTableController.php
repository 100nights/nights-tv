<?php

namespace App\Http\Controllers;

use App\TvChannelProgramsTable;
use Carbon\Carbon;

class TvChannelProgramsTableController extends Controller
{
  public function index()
  {
    $channelCode = request()->query('channel_code');
    $date = request()->query('date') ?? Carbon::now()->format('Y-m-d');

    if (!$channelCode) {
      return response()->json(['status' => 'error', 'message' => 'channel_code is required']);
    }

    $programs = TvChannelProgramsTable::query()
      ->where('channel_code', $channelCode)
      ->where('start_date_time', 'like', $date . '%')
      ->get();

    return response()->json($programs);
  }
}
