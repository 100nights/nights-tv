<?php

namespace App\Http\Controllers;

use App\TvGuideChannel;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TvGuideChannelController extends Controller
{
  public function index()
  {
    $page = (int)(request('page') ?? 1);

    $tvGuideChannels = TvGuideChannel::query()->paginate(10);
    if ($tvGuideChannels->isNotEmpty()) {
      return response()->json($tvGuideChannels);
    } else {
      for ($page = 0; $page <= 12; $page++) {
        $res = $this->getTvGuide($page);
        foreach ($res as $item) {
          $channel = new TvGuideChannel();
          $channel->name = $item->Name;
          $channel->channel_genre = $item->ChannelGenre;
          $channel->row_number = $item->RowNumber;
          $channel->number = $item->Number;
          $channel->channel_code = $item->ChannelCode;
          $channel->osn_play = $item->OSNPlay;
          $channel->osn_play_url = $item->OSNPlayURL;
          $channel->save();
        }
        $tvGuideChannels = TvGuideChannel::query()->paginate(10);
      }
      return response()->json($tvGuideChannels);
    }
  }

  protected function getTvGuide($page)
  {
    $client = new Client();
    $response = $client->request('post', 'https://www.osn.com/CMSPages/TVScheduleWebService.asmx/GetTVChannelsPageWise', ['json' => [
      'channelsQuery' => 'select distinct ROW_NUMBER() OVER(ORDER BY CH.Number)
                            AS RowNumber,CH.Number, CH.Name, CH.ChannelGenre, ch.ChannelCode, CH.HD, ch.OSNPlay,CH.OSNPlayURL
                            INTO #Results FROM osn_Channel CH Where CH.IsActive=1 AND CH.Number <> 0 And (1=1) And (1=1) And (1=1) And (1=1) And (1=1)',
      'pageIndex' => $page
    ]]);

    $dataJson = $response->getBody()->getContents();
    $data = json_decode($dataJson);
    return json_decode($data->d);
  }

  public function show(TvGuideChannel $tvGuideChannel)
  {
    return response()->json($tvGuideChannel);
  }


  public function update(Request $request, TvGuideChannel $tvGuideChannel)
  {

    $tvGuideChannel->row_number = $request->RowNumber;
    $tvGuideChannel->number = $request->Number;
    $tvGuideChannel->name = $request->Name;
    $tvGuideChannel->channel_code = $request->ChannelCode;
    $tvGuideChannel->channel_genre = $request->ChannelGenre;
    $tvGuideChannel->osn_play = $request->OSNPlay;
    $tvGuideChannel->osn_play_url = $request->OSNPlayURL;

    $tvGuideChannel->save();

    return response()->json($tvGuideChannel);
  }

  public function destroy(TvGuideChannel $tvGuideChannel)
  {
    try {

      if ($tvGuideChannel->delete()) {
        return response()->json(['status' => 'deleted']);
      }

    } catch (\Exception $e) {
      return response()->json(['error' => 'Cannot delete tvGuideChannel'], 400);
    }
  }
}
