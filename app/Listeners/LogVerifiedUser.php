<?php

namespace App\Listeners;

use App\Events\ConfirmedServiceRequest;
use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogVerifiedUser {
	/**
	 * Create the event listener.
	 *
	 * @return void
	 */
	public function __construct() {
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  Verified $event
	 *
	 * @return void
	 */
	public function handle( Verified $event ) {
		$user = $event->user;

		foreach ( $user->serviceRequests as $serviceRequests ) {
			$serviceRequests->update( [ 'confirmed' => true ] );
			event( new ConfirmedServiceRequest( $serviceRequests ) );
		}
	}
}
