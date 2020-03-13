<?php

namespace App\Listeners;

use App\Events\ServiceRequestAccepted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class ClearBlackList {
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
	 * @param  ServiceRequestAccepted $event
	 *
	 * @return void
	 */
	public function handle( ServiceRequestAccepted $event ) {
		DB::table( 'alreadtsendrequrst' )
		  ->where( 'service_request_uid', $event->service_request_uid )
		  ->delete();
	}
}
