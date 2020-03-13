<?php

namespace App\Listeners;

use App\Events\UserOnline;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SetStatusOnline implements ShouldQueue{
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
	 * @param  UserOnline $event
	 *
	 * @return void
	 */
	public function handle( UserOnline $event ) {
		$uid  = $event->uid;
		$user = User::where( 'uid', $uid )->first();
		if ( $user ) {
			$user->online_status = true;
			$user->save();
		}
	}
}
