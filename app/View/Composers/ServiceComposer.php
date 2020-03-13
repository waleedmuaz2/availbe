<?php

namespace App\View\Composers;


use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\View\View;

class ServiceComposer {

	private $allServices;
	private $allCat;

	public function __construct() {
		$this->allServices = Service::with(['category'])->get();
		$this->allCat      = ServiceCategory::all();
	}

	public function compose( View $view ) {
		$view->with( [ 'services' => $this->allServices, 'serviceCategories' => $this->allCat ] );
	}
}