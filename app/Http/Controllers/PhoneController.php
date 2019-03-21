<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(Request $request)
    {
    	$number = $request->phone;
    	//echo $number;
    	return \QrCode::size(300)->phoneNumber($number);
    }
}
