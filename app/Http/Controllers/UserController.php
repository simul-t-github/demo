<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
	public function check(Request $request) {
		if (Auth::guard('')) {
			// code...
		}
	}
}
