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

Route::post('login', 'UserController@login');

Route::get('take', function (){
    //$user = \App\User::find(1);
    //$token = $user->createToken('MyApp')->accessToken;
    //return response()->json(["token" => $token]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {

    dd("55");
    dd(\Illuminate\Support\Facades\Auth::user()->toArray());
    return $request->user();
});


