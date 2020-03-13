<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model {
	protected $fillable = [ 'type', 'desc', 'avatar' ];

	public function carTypes() {
		return $this->hasMany('App\Models\CarBrand');
	}
	public function service() {
		return $this->hasMany('App\Models\Service');
	}
}
