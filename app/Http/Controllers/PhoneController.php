<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
    	$number = '776-004-1698';
    	return \QrCode::size(300)->phoneNumber($number);
    }
}
