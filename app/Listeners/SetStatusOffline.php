<?php

namespace App\Listeners;

use App\Events\UserOffline;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SetStatusOffline implements ShouldQueue{
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
	 * @param  UserOffline $event
	 *
	 * @return void
	 */
	public function handle( UserOffline $event ) {
		$uid  = $event->uid;
		$user = User::where( 'uid', $uid )->first();
		if ( $user ) {
			$user->online_status = false;
			$user->save();
		}

	}
}
