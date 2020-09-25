<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\User;

class loginAppController extends Controller
{

	public function index(Request $request)
	{
		$loginDetails = $request->validate([
			'email' => 'required|string',
			'password' => 'required|string',
		]);

    	if(Auth::attempt($loginDetails))
    	{
            $email_status = User::where("email", $request->email)->first();
            if(!is_null($email_status)) 
            {
                $password_status = User::where("email", $request->email)->where("password", Hash::check('password', $request->password))->first();
                if(!is_null($password_status)) 
                {
                    $accessToken = Auth::user()->createToken('authToken')->accessToken;
					return response()->json(['message' => 'Login Successful',
									 'first_name' => Auth::user()->first_name,
									 'last_name' => Auth::user()->last_name,
									 'email' => Auth::user()->email,
									 'access_token' => $accessToken,
									 'user_id' => Auth::user()->id,
									 'profile_pic' => Auth::user()->profile->profile_pic,
									 'profile_name' => Auth::user()->profile->name,
									 'designation' => Auth::user()->profile->designation,
									 ]);
                }

                else 
                {
                    return response()->json(["status" => "failed", "success" => false, "message" => "Unable to login. Incorrect password."]);
                }
            }

            else {
                return response()->json(["status" => "failed", "success" => false, "message" => "Unable to login. Email doesn't exist."]);
            }
    	}

    	else
    	{
    		return response()->json(['message' => 'Login Failed']);
		}
		
	}

	public function logout(){

		auth()->guard('api')->user()->token()->revoked;

		return response()->json(['message' => 'Logout Success', 200]);
	}
}
