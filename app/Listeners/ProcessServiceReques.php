<?php

namespace App\Listeners;

use App\Events\ConfirmedServiceRequest;
use App\Events\ServicePartnerMatched;
use App\User;
use Illuminate\Support\Facades\DB;

class ProcessServiceReques {

//	public $queue = 'SSRToF';  //SSRToF =ProcessServiceReques

	public function __construct() {
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  ConfirmedServiceRequest $event
	 *
	 * @return void
	 */
	public function handle( $event) {
		$serviceRequest = $event->serviceRequest;  // this is ServiceRequest model obj

		$alre = DB::table( 'alreadtsendrequrst' )
		          ->where( 'service_request_uid', $serviceRequest->uid )
		          ->get();

		$user = User::permission( (string) $serviceRequest->serviceCategory->slang )
		                ->where( 'online_status', true )
		                ->where( 'state', $serviceRequest->state );

		if ( count( $alre ) > 0 ) {
			$user->whereNotIn( 'id', $alre->pluck( 'user_id' ) );
			$user = $user->first();
		} else {
			$user = $user->first();
		}
		if ( $user ) {
			event( new ServicePartnerMatched( $user->id, $serviceRequest ) );
			DB::table( 'alreadtsendrequrst' )->insert(
				[ 'service_request_uid' => $serviceRequest->uid, 'user_id' => $user->id ]
			);

		} else {
			echo 'nouser avail';
		}


	}
}
