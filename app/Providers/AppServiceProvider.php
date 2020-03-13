<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		Schema::defaultStringLength( 191 );

		View::composer(
			[
				'admin.Service.index',
				'admin.Service.index-service-category',
				'auth.register',
				'includes.reservation-form'
			],
			'App\View\Composers\ServiceComposer'
		);

		View::composer(
			'auth.register',
			'App\View\Composers\CountryComposer'
		);
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
