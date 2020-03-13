<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class CarBrand extends Model implements HasMedia {
	use HasMediaTrait;

	protected $fillable=['car_category_id','name','desc','avatar'];

	public function parentCategory() {
		return $this->belongsTo('App\Models\CarType','car_category_id');
	}
	public function serviceType() {
		return $this->hasMany('App\Models\Service');
	}
}
