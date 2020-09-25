<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class registerAppController extends Controller
{
	private $status_code    =        200;
	public function index(Request $request)
	{
		$validator              =        Validator::make($request->all(), [
			"first_name"        =>          ['required', 'string', 'max:255'],
			"last_name"         =>          ['string', 'max:255'],
			"middle_name"       =>          ['required', 'string', 'max:255'],
			"email"             =>          ['required', 'string', 'email', 'max:255', 'unique:users'],
			"password"          =>          ['required', 'string', 'min:8', 'confirmed']
		]);
	
	
		$userDataArray           =       array(
			"first_name"         =>          $request->first_name,
			"middle_name"        =>          $request->middle_name,
			"last_name"          =>          $request->last_name,
			"email"              =>          $request->email,
			"password"           =>          Hash::make($request->password),
		);

		$user_status            =           User::where("email", $request->email)->first();

        if(!is_null($user_status)) {
           return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! email already registered"]);
        }
	
		$user                   =           User::create($userDataArray);

		$profileUser = $user->profile()->create([
            'name'          => $user->first_name . ' ' . $user->last_name,
            'designation'   => 'Unknown',
            'profile_pic'   =>  'https://scontent.fmnl17-2.fna.fbcdn.net/v/t1.15752-9/84635140_512608259689177_1838351100537733120_n.png?_nc_cat=103&_nc_sid=b96e70&_nc_ohc=DCwPcUmmVSgAX-ef582&_nc_ht=scontent.fmnl17-2.fna&oh=38e2db42915068a9e47fd6ebbf6b68b3&oe=5F93E701',
        ]);
	
		if(!is_null($user)) {
			return response()->json(["status" => $this->status_code, "success" => true, "message" => "Registration completed successfully", "data" => $profileUser]);
		}
	
		else {
			return response()->json(["status" => "failed", "success" => false, "message" => "Failed to register"]);
		}
	}
}
