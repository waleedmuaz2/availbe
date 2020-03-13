<?php

use App\Models\Role;
use App\User;
use Illuminate\Foundation\Inspiring;


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command( 'inspire', function () {
	$this->comment( Inspiring::quote() );
} )->describe( 'Display an inspiring quote' );


Artisan::command( 'create:admin', function () {

	$user = User::create( [
		'name'     => 'Admin',
		'email'    => str_random( 5 ) . '@gmail.com',
		'password' => Hash::make( 'rroott' ),
	] );

	if ( ! ( Role::where( 'name', 'admin' )->first() ) ) {
		$role = Role::create( [ 'name' => 'admin','display_name'=>'Admin' ] );
	}
	$user->assignRole( 'admin' );

} )->describe( 'Create a new admin user with admin role' );
