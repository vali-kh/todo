<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiPassportController extends Controller
{

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], 200);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    
    public function logoutApi()
    { 

        if (Auth::guard('api')->check()) {
            Auth::guard('api')->user()->token()->revoke();
            return response()->json(['message'=>'Your logout'], 401);
        }
        return response()->json(['error'=>'You are not login'], 401);
    }


     
}
