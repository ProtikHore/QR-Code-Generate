<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index(Request $request)
    {
    	$number = $request->receiver_number;
    	$message = $request->message;
    	//echo $number;
    	return \QrCode::size(300)->SMS($number, $message);
    }
}
