<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 29.10.2017
 * Time: 18:10
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login()
    {

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){

            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json($success, $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
}