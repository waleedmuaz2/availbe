<?php

namespace App\Http\Controllers\ServicePartner;

use App\Events\ServiceRequestAccepted;
use App\Events\ServiceRequestDeclined;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceOfferController extends Controller {
	public function accepted( Request $request ) {

		$service_request = ServiceRequest::where( 'uid', $request->service_request_uid )->first();

		if ( $service_request ) {

			$service_request->service_provider_id = auth()->user()->id;
			$service_request->save();
			event( new ServiceRequestAccepted( $service_request ) );

			return response()->json( 'ok' );
		}

		return abort();
	}

	public function decliced( Request $request ) {
		$service_request = ServiceRequest::where( 'uid', $request->service_request_uid )->first();

		if ( $service_request ) {
			event( new ServiceRequestDeclined( $service_request ) );
			return response()->json( 'ok' );
		}

		return abort();
	}
}
