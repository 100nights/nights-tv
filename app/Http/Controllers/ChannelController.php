<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChannelController extends Controller
{
  public function index()
  {
    $channels = Channel::all();


    foreach ($channels as $channel) {
      $channel['category'] = $channel->category;
    }

    return response()->json(['channels' => $channels]);
  }


  public function kids()
  {
    $channels = Channel::where('kids', 1)->get();


    return response()->json($channels);
  }

  public function store(Request $request)
  {

    $request->validate([
      'name' => 'required',
      'url' => 'required',
      'image' => 'required',
      'category_id' => 'required',
    ]);


    try {
      $channel = new Channel();
      $channel->name = $request->name;
      $channel->image = $request->image;
      $channel->url = $request->url;
      $channel->category_id = $request->category_id;

      if ($request->channel_code) {
        $channel->channel_code = $request->channel_code;
      }

      $channel->save();

      return response()->json(['channel' => $channel, 'status' => 'created']);
    } catch (\Exception $exception) {
      return response()->json(['error' => 'Could not create a new channel'], 500);
    }
  }

  public function show(Channel $channel)
  {
    return response()->json(['channel' => $channel]);
  }

  public function update(Request $request, Channel $channel)
  {
    $request->validate([
      'name' => 'required',
      'url' => 'required',
      'image' => 'required',
      'category_id' => 'required',
    ]);

    if ($request->image) {
      Storage::disk('public')->delete($channel->image);
    }

    $channel->name = $request->name;
    $channel->image = $request->image;
    $channel->url = $request->url;
    $channel->category_id = $request->category_id;
    if ($request->channel_code) {
      $channel->channel_code = $request->channel_code;
    }
    $channel->save();

    return response()->json(['channel' => $channel]);
  }

  public function destroy(Channel $channel)
  {
    try {
      $image_url = $channel->image;
      Storage::disk('public')->delete($image_url);

      if ($channel->delete()) {
        return response()->json(['status' => 'deleted']);
      }
    } catch (\Exception $e) {
      return response()->json(['error' => 'Cannot delete channel'], 400);
    }
  }
}
