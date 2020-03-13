<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		Registered::class                    => [
			SendEmailVerificationNotification::class,
		],
		'App\Events\ConfirmedServiceRequest' => [
			'App\Listeners\ProcessServiceReques',
		],
		'App\Events\ServiceRequestDeclined'  => [
			'App\Listeners\ProcessServiceReques',
		],
		'App\Events\ServiceRequestAccepted'  => [
			'App\Listeners\ClearBlackList',
		],
		'App\Events\UserOnline'              => [
			'App\Listeners\SetStatusOnline',
		],
		'App\Events\UserOffline'             => [
			'App\Listeners\SetStatusOffline',
		],
		'Illuminate\Auth\Events\Verified'    => [
			'App\Listeners\LogVerifiedUser',
		],
		'App\Events\ServicePartnerMatched'   => [
		],
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot() {
		parent::boot();

		//
	}
}
