<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOfflineController extends Controller {
	public function __invoke() {
		$user                = Auth::user();
		$user->online_status = false;
		$user->save();
	}
}
