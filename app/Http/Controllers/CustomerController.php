<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function postRegisterEmail(Request $request) {
		return response()->json([
		    'name' => 'Abigail',
		    'state' => 'CA'
		]);    	
    }
}
