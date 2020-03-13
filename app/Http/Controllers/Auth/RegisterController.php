<?php

namespace App\Http\Controllers\Auth;

use App\Jobs\CreatUserInstanceOnFirebase;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'guest' );
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array $data
	 *
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator( array $data ) {
		return Validator::make( $data, [
			'country'      => [ 'required' ],
			'address'      => [ 'required' ],
			'state'        => [ 'required' ],
			'first_name'   => [ 'required', 'string', 'max:255' ],
			'last_name'    => [ 'required', 'string', 'max:255' ],
			'partner_type' => [ 'required', 'not_in:admin', 'exists:roles,name' ],
			// indicat the role
			'service_type' => [
				'required_if:partner_type,service_partner',
				Rule::exists( 'permissions', 'name' )->where( function ( $query ) {
					$query->where( 'type', 'service_category' );
				} )
			],
			// indicat the permissions  if role is service_partner
			'company_name' => [ 'required', 'string', 'max:255' ],
			'email'        => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
			'password'     => [ 'required', 'string', 'min:6', 'confirmed' ],
		] );
	}

	protected function validatorForCustomer( array $data ) {
		return Validator::make( $data, [
			'email'    => [ 'required', 'string', 'email', 'max:255' ],
			'password' => [ 'required', 'string', 'min:6', 'confirmed' ],
		] );
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array $data
	 *
	 * @return \App\User
	 */
	protected function create( array $data ) {
		return User::create( [
			'uid'          => ( Uuid::uuid3( Uuid::NAMESPACE_DNS, Carbon::now() . $data['email'] ) )->toString(),
			'first_name'   => $data['first_name'],
			'last_name'    => $data['last_name'],
			'company_name' => $data['company_name'],
			'email'        => $data['email'],
			'state'        => $data['state'],
			'country'      => $data['country'],
			'lat'          => $data['lat'],
			'lng'          => $data['lng'],
			'address'      => $data['address'],
			'zip'      => $data['zip'],
			'password'     => Hash::make( $data['password'] ),
		] );
	}

	public function register( Request $request ) {

		if ( $request->session()->get( 'waiting_for_reg', false ) || isset( $request->waiting_for_reg ) ) {
			$this->validatorForCustomer( $request->all() )->validate();
			$user = $this->createCustomerPassword( $request->email, $request->password );
			$user->assignRole( 'customer' );
			event( new Registered( $user ) );
		} else {
			$this->validator( $request->all() )->validate();
			event( new Registered( $user = $this->create( $request->all() ) ) );
			// After Creating a User Add  user role
			$user->assignRole( $request->partner_type );
			if ( $request->partner_type == 'service_partner' ) {
				$user->givePermissionTo( $request->service_type );
			}
		}


		$this->guard()->login( $user );

		return $this->registered( $request, $user )
			?: redirect( $this->redirectPath() );
	}

	protected function createCustomerPassword( $email, $password ) {
		$user = User::where( 'email', $email )->first();
		$user->update( [ 'password' => Hash::make( $password ) ] );

		return $user;
	}

}
