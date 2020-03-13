<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model {
	protected $fillable = [
		'name',
		'slang'
	];

	public function services() {
		return $this->hasMany('App\Models\Service');
	}
}
