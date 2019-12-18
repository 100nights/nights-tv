<?php

namespace App\Http\Controllers;

use App\VotePost;
use Illuminate\Http\Request;

class VotePostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function index(Request $request)
  {
    $uid = md5($_SERVER['HTTP_USER_AGENT'] .  $_SERVER['REMOTE_ADDR']);
    $vote_post = VotePost::first();
    $total_votes = 0;

    $user_vote = null;

    $home_votes = 0;
    $away_votes = 0;
    $draw_votes = 0;

    if ($vote_post) {
      $total_votes = $vote_post->votes()->count();
      $user_vote = $vote_post
        ->votes()
        ->where('address', $uid, 'and')
        ->where('vote_post_id', $vote_post->id)
        ->first();

      $home_votes = $vote_post->votes()->where('vote', 'home')->count();
      $away_votes = $vote_post->votes()->where('vote', 'away')->count();
      $draw_votes = $vote_post->votes()->where('vote', 'draw')->count();
    }

    $home_ratio = 0;
    $draw_ratio = 0;
    $away_ratio = 0;

    if ($total_votes > 0) {
      $home_ratio = $home_votes / $total_votes;
      $away_ratio = $away_votes / $total_votes;
      $draw_ratio = $draw_votes / $total_votes;
    }



    return response()->json([
      'vote_post' => $vote_post,
      'total_votes' => $total_votes,
      'home_votes' => $home_votes,
      'home_ratio' => $home_ratio,
      'away_votes' => $away_votes,
      'away_ratio' => $away_ratio,
      'draw_votes' => $draw_votes,
      'draw_ratio' => $draw_ratio,
      'vote' => $user_vote ? $user_vote->vote : null,
    ]);
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(Request $request)
  {
    $request->validate([
      'home_name' => 'required',
      'away_name' => 'required',
      'draw_name' => 'required',
    ]);
    try {
      $vote_post = VotePost::first();
      if ($vote_post) {
        $vote_post->delete();
      }
      $vote_post = new VotePost();
      $vote_post->votes()->delete();
      $vote_post->title = $request->title;
      $vote_post->title_ar = $request->title_ar;
      $vote_post->home_name = $request->home_name;
      $vote_post->home_name_ar = $request->home_name_ar;
      $vote_post->away_name = $request->away_name;
      $vote_post->away_name_ar = $request->away_name_ar;
      $vote_post->draw_name = $request->draw_name;
      $vote_post->draw_name_ar = $request->draw_name_ar;

      $vote_post->save();

      return response()->json(['vote_post' => $vote_post, 'status' => 'created']);

    } catch (\Exception $exception) {
      return response()->json(['error' => 'Could not create a new post'], 500);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param \App\VotePost $votePost
   * @return \Illuminate\Http\JsonResponse
   */
  public function show(Request $request)
  {
    $uid = md5($_SERVER['HTTP_USER_AGENT'] .  $_SERVER['REMOTE_ADDR']);

    $vote_post = VotePost::first();
    $total_votes = 0;

    $user_vote = null;

    $home_votes = 0;
    $away_votes = 0;
    $draw_votes = 0;

    if ($vote_post) {
      $total_votes = $vote_post->votes()->count();
      $user_vote = $vote_post
        ->votes()
        ->where('address', $uid, 'and')
        ->where('vote_post_id', $vote_post->id)
        ->first();

      $home_votes = $vote_post->votes()->where('vote', 'home')->count();
      $away_votes = $vote_post->votes()->where('vote', 'away')->count();
      $draw_votes = $vote_post->votes()->where('vote', 'draw')->count();
    }

    if ($total_votes > 0) {
      $home_ratio = $home_votes / $total_votes;
      $away_ratio = $away_votes / $total_votes;
      $draw_ratio = $draw_votes / $total_votes;
    }

    return response()->json([
      'vote_post' => $vote_post,
      'total_votes' => $total_votes,
      'home_votes' => $home_votes,
      'home_ratio' => $home_ratio,
      'away_votes' => $away_votes,
      'away_ratio' => $away_ratio,
      'draw_votes' => $draw_votes,
      'draw_ratio' => $draw_ratio,
      'vote' => $user_vote ? $user_vote->vote : null,
    ]);
  }


  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\VotePost $votePost
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, VotePost $votePost)
  {

  }


  public function destroy(VotePost $votePost)
  {
    $votePost->delete();
    return response()->json(['status' => 'success']);
  }
}
