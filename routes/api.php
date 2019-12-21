<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return response()->json([
    "code" => 20000, "data" => [
      "roles" => ["admin"],
      "introduction" => "I am a super administrator",
      "avatar" => "https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif",
      "name" => $request->user()->name
    ]
  ]);
  // return $request->user();
});

Route::resource('/votes', 'VoteController');
Route::resource('/vote_posts', 'VotePostController');
Route::get('/landing', 'LandingController@index');
Route::get('/channels/category/{category}', 'CategoryController@getChannels');
Route::get('/promos', 'PromoController@index');
Route::get('/channels', 'ChannelController@index');
Route::get('/channels/{channel}', 'ChannelController@show');
Route::post('/files', 'FileController@uploadFile');
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/home_promo', 'HomePromoController@index');

Route::get('/game_date', function () {
  $gameDate = \App\GameDate::first();

  return response()->json(['game_date' => $gameDate], 200);
});

Route::post(
  '/game_date',
  function (Request $request) {
    $request->validate([
      'date' => 'required|max:255',
    ]);

    try {
      $date = \App\GameDate::first();
      if (!$date) {
        $date = new \App\GameDate();
      }
      $date->date = $request->date;
      $date->save();

      return response()->json(['date' => $date]);
    } catch (\Exception $exception) {
      return response()->json(['error' => 'Could not update date'], 500);
    }
  }
);

Route::middleware('auth:api')->group(function () {
  Route::post('/landing', 'LandingController@store');

  Route::post('/promos', 'PromoController@store');
  Route::patch('/promos/{promo}', 'PromoController@update');
  Route::delete('/promos/{promo}', 'PromoController@destroy');

  Route::post('/home_promo', 'HomePromoController@store');

  Route::post('/channels', 'ChannelController@store');
  Route::patch('/channels/{channel}', 'ChannelController@update');
  Route::delete('/channels/{channel}', 'ChannelController@destroy');

  Route::patch('/categories/{category}', 'CategoryController@update');
  Route::post('/categories', 'CategoryController@store');
  Route::delete('/categories/{category}', 'CategoryController@destroy');
});

Route::post('/user/login', function (Request $request) {
  $email = $request->email;
  $password = $request->password;

  // check the token
  if (!$token = auth()->attempt(['email' => $email, 'password' => $password])) {
    return response()->json(['error' => 'Unauthorized'], 401);
  }

  $user = \App\User::where('email', $email)->first();

  return response()->json(['token' => $user->api_token], 200);
});
