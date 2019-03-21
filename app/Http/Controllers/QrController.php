<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index(Request $request)
    {
    	$name = $request->name;
    	//echo $name;
    	return \QrCode::size(300)->generate($name); //show on page

    	//$result = \QrCode::size(300)->generate('my qrcode', 'qr.svg');
		// \Storage::disk('local')->put('file.txt', $result); // save in public folder
    }
}
