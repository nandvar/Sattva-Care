<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Request;

class UserController extends Controller
{
	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function contact()
	{
		$to_address = "contact@sattvacare.com";
		$subject = "Query from: " . Request::get('name');
		$message = "Name: " . Request::get('name') . "\n";
		$message .= "Phone: " . Request::get('number') . "\n\n";
		$message .= "Message:- \n\n" . Request::get('message');
		$headers = "From: " . Request::get('email') . "\r\n";
		if(Request::get('name')!=""&&Request::get('email')!="")
			mail("$to_address","$subject","$message","$headers");
		return redirect('contact');
	}
}