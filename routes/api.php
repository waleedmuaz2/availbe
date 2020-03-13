<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware( 'auth:api' )->get( '/user', function ( Request $request ) {
	return $request->user();
} );


Route::get( '/car-brand', function () {
	return response()->json( ( \App\Models\CarBrand::orderBy( 'name' )->get() ) );
} );

Route::get( '/car-type', function () {
	return response()->json( ( \App\Models\CarType::orderBy( 'type' )->get() ) );
} );

Route::get( '/services', function () {
	return response()->json( ( \App\Models\ServiceCategory::with( 'services' )->get() ) );
} );

Route::get( '/extra-services', function () {
	return response()->json( ( \App\Models\Service::whereNull('service_category_id')->get() ) );
} );
