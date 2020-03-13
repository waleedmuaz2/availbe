<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

	protected $fillable = [ 'name', 'slang', 'service_category_id','selected_car_category_id','car_type_id', 'cost' ];

	public function serviceRequests() {
		return $this->morphedByMany( 'App\Models\ServiceRequest', 'serviceable' );
	}

	public function category() {
		return $this->belongsTo('App\Models\ServiceCategory','service_category_id');
	}
	public function carCategory() {
		return $this->belongsTo('App\Models\CarType','selected_car_category_id');
	}
	public function carType() {
		return $this->belongsTo('App\Models\CarBrand','car_type_id');
	}
}
