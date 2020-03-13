<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use App\Repository\ServiceRequestRepo;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ServiceRequestController extends Controller {

	protected $ServiceRequestRepo;

	public function __construct( ServiceRequest $service_request ) {
		$this->ServiceRequestRepo = new ServiceRequestRepo( $service_request );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {


//		dd( $request->all() );
// TODO Validation
		$this->ServiceRequestRepo->store( $request );

		$user = User::firstOrCreate(
			[ 'email' => $request->user_email ],
			[
				'uid'        => ( Uuid::uuid3( Uuid::NAMESPACE_DNS, Carbon::now() . $request->user_email ) )->toString(),
				'email'      => $request->user_email,
				'first_name' => $request->reservation_name,
				'phone'      => $request->reservation_phone
			]
		);

		$redi = null;
		$user->makeVisible( 'password' );
		if ( ! isset( $user->password ) || $user->password == null ) {
			session( [ 'waiting_for_reg' => true ] );
			$redi = route( 'register' );
		} else {
			session( [ 'waiting_for_login' => true ] );
			$redi = route( 'login' );
		}
		session( [ 'email' => $request->user_email ] );
		session( [ 'customer_name' => $request->reservation_name ] );

		return redirect( $redi );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\ServiceRequest $serviceRequest
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( ServiceRequest $serviceRequest ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\ServiceRequest $serviceRequest
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( ServiceRequest $serviceRequest ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\ServiceRequest $serviceRequest
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, ServiceRequest $serviceRequest ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\ServiceRequest $serviceRequest
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( ServiceRequest $serviceRequest ) {
		//
	}
}
