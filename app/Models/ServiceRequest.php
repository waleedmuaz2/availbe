<?php

namespace App\Models;

use App\HasLocation;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model {
	use HasLocation;

	protected $fillable = [
		'uid',
		'car_brand_id',
		'car_type_id',
		'car_category_id',
		'car_model',
		'car_year',
		'number_of_wheels',
		'preferred_service_time',
		'message',
		'user_email',
		'confirmed',
		'decline',
		'complete',
		'service_provider_id',
		'service_category_id',
		'state_id',
		'address_2',
		'address',
		'lat',
		'lng',
	];

	public function services() {
		return $this->morphToMany( 'App\Models\Service', 'serviceables' );
	}

	public function carBrand() {
		return $this->hasOne( 'App\Models\CarBrand', 'id', 'car_brand_id' );
	}

	public function carType() {
		return $this->hasOne( 'App\Models\CarType', 'id', 'car_type_id' );
	}

	public function serviceCategory() {
		return $this->belongsTo( 'App\Models\ServiceCategory', 'service_category_id' );
	}

	public function customer() {
		return $this->belongsTo( 'App\User', 'user_email', 'email' );
	}
}
