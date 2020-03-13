<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail {
	use Notifiable;
	use HasRoles;
	use HasLocation;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'uid',
		'first_name',
		'last_name',
		'company_name',
		'email',
		'password',
		'state',
		'country',
		'lat',
		'lng',
		'zip',
		'address'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	public function state() {
		return $this->belongsTo( 'App\Models\State' );
	}

	public function country() {
		return $this->belongsTo( 'App\Models\Country' );
	}

	public function serviceRequests() {
		return $this->hasMany( 'App\Models\ServiceRequest', 'user_email', 'email' );
	}
}
