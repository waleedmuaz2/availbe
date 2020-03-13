<?php

namespace App\Events;


use App\Models\ServiceRequest;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class ConfirmedServiceRequest {
	use Dispatchable, SerializesModels;

	public $serviceRequest;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(ServiceRequest $serviceRequest ) {
		$this->serviceRequest = $serviceRequest;
	}

}
