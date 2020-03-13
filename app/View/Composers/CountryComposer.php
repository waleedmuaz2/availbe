<?php

namespace App\View\Composers;


use App\Models\Country;
use App\Models\State;
use Illuminate\View\View;

class CountryComposer {

	private $model;
	private $model2;


	public function __construct() {
		$this->model  = Country::all();
		$this->model2 = State::all();
	}

	public function compose( View $view ) {
		$view->with( [ 'countries' => $this->model, 'states' => $this->model2 ] );
	}
}