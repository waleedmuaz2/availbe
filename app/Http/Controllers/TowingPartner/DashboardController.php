<?php

namespace App\Http\Controllers\TowingPartner;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {
	public function home() {
		return view( 'TowingPartner.index' );
	}
}
