<?php

namespace App\Providers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Firebase {

	public static function Init() {
		$serviceAccount = ServiceAccount::fromJsonFile( __DIR__ . '/google-service-account.json' );
		$Factory        = ( new Factory() )->withServiceAccount( $serviceAccount )
		                                   ->create();

		return $Factory;
	}
}