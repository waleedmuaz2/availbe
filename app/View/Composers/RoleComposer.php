<?php

namespace App\View\Composers;


class RoleComposer {


	public function __construct(  ) {

	}

	public function compose( View $view ) {
		$view->with( 'count', $this->users->count() );
	}
}