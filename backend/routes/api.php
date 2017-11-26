<?php

use Illuminate\Http\Request;

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
    return $request->user();
});
Route::get('/test', function() {
    return response()->json([
        'user' => [
            'first_name' => 'chester',
            'last_name' =>'cheese'
        ]
    ]);
});

// Route::middleware('auth:api')->group(function () {

    Route::resource('forums','ForumsController'); 
    Route::resource('replies','RepliesController');
// });

// Route::middleware('auth:api')->get('/user', function () {
//     Route::resource('forum','ForumsController'); 
//     // restricted api sht Protected
// });