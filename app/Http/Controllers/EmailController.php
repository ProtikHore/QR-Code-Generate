<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $request)
    {
    	$to_address = $request->email_address;
    	$subject = $request->email_subject;
    	$body = $request->email_body;
    	//echo $number;
    	return \QrCode::size(300)->email($to_address, $subject, $body);
    }
}
