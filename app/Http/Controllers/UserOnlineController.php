<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOnlineController extends Controller {
	public function __invoke() {
		$user                = Auth::user();
		$user->online_status = true;
		$user->save();
	}
}
