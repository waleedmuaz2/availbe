<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'auth' );
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {

		if ( auth()->user()->hasRole( 'admin' ) ) {
			$redirect = redirect( route( 'admin.home' ) );
		}

		if ( auth()->user()->hasRole( 'service_partner' ) ) {
			$redirect = redirect( route( 'service.partner.home' ) );
		}
		if ( auth()->user()->hasRole( 'inventory_partner' ) ) {
			$redirect = redirect( route( 'inventory.partner.home' ) );
		}
		if ( auth()->user()->hasRole( 'towing_partner' ) ) {
			$redirect = redirect( route( 'towing.partner.home' ) );
		}
		if ( auth()->user()->hasRole( 'collusion_center_partner' ) ) {
			$redirect = redirect( route( 'collusion.partner.home' ) );
		}
		if ( auth()->user()->hasRole( 'banking_partner' ) ) {
			$redirect = redirect( route( 'banking.partner.home' ) );
		}
		if ( auth()->user()->hasRole( 'insurance_partner' ) ) {
			$redirect = redirect( route( 'insurance.partner.home' ) );
		}
		if ( auth()->user()->hasRole( 'customer' ) ) {
			$redirect = redirect( route( 'customer.home' ) );
		}

		return $redirect;
	}
}
