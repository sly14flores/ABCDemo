<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
	
	public function get_profile(Request $request) {
		
		$user = $request->user();
		
		return [
			"id"=>$user->id,
			"firstname"=>$user->firstname,
			"lastname"=>$user->lastname
		];
		
	}
	
	public function api_token(Request $request) {

		return $request->user()->api_token;
		
	}
	
}
