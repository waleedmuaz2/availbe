<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
	public function home() {
		session()->forget( [ 'email', 'waiting_for_login', 'waiting_for_reg', 'customer_name' ] );
		return view( 'Customer.index' );
	}
}
