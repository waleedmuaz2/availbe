<?php
/**
 * Created by PhpStorm.
 * User: Matrix
 * Date: 3/29/2019
 * Time: 6:24 PM
 */

namespace App\Repository;


use App\Models\ServiceRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class ServiceRequestRepo {

	protected $model;

	public function __construct( ServiceRequest $service_request ) {
		$this->model = $service_request;
	}

	public function store( $request ) {
		$newRequest                         = new ServiceRequest();
		$newRequest->uid                    = ( Uuid::uuid3( Uuid::NAMESPACE_DNS, $request->address.''.Carbon::now() ) )->toString();
		$newRequest->car_brand_id           = $request->car_brand_id;
		$newRequest->car_type_id            = $request->car_type_id;
		$newRequest->car_model              = $request->car_model;
		$newRequest->service_category_id    = $request->service_category_id;
		$newRequest->car_year               = $request->car_year;
		$newRequest->number_of_wheels       = $request->number_of_wheels;
		$newRequest->preferred_service_time = date( 'Y-m-d H:i:s', strtotime( $request->preferred_service_time ) );
		$newRequest->message                = $request->message;
		$newRequest->user_email             = $request->user_email;
		$newRequest->confirmed              = ( Auth::check() && auth()->user()->hasVerifiedEmail() ) ? true : false;
		$newRequest->decline                = false;
		$newRequest->complete               = false;
		$newRequest->service_provider_id    = null;
		$newRequest->address                = $request->address;
		$newRequest->state                  = $request->state;
		$newRequest->country                = $request->country;
		$newRequest->lat                    = $request->lat;
		$newRequest->lng                    = $request->lng;
		$newRequest->route                  = $request->route;
		$newRequest->exact_location         = $request->exact_location;
		$newRequest->save();
		$newRequest->services()->sync( $request->services_id );


		return $newRequest;
	}
}