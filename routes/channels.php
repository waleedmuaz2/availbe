<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel( 'App.User.{id}', function ( $user, $id ) {
	return (int) $user->id === (int) $id;
} );

Broadcast::channel( 'service_partner.{id}', function ( $user, $id ) {
	// this channel for service provider
	return (int) $user->id === (int) $id;
} );

Broadcast::channel( 'customer.{id}', function ( $user, $id ) {
	// this channel for customers
	return (int) $user->id === (int) $id;
} );


//Broadcast::channel( 'chat', function ( $user ) {
//	return 'asd';
//
//} );
