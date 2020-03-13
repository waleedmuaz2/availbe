<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ServicePartnerMatched implements ShouldBroadcastNow {
	use Dispatchable, InteractsWithSockets, SerializesModels;
	protected $service_partner_id; // basically user id
	public $service_request_uid;
	public $services;
	public $car_brand;
	public $car_type;
	public $car_model;
	public $car_year;
	public $address;
	public $excet_address;
	public $preferred_time;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
//	public function __construct( User $service_partner ) {
//		$this->service_partner = $service_partner;
//	}
	public function __construct( $service_partner_id, $service_request ) {
		$this->service_partner_id  = $service_partner_id;
		$this->service_request_uid = $service_request->uid;
		$this->services            = $service_request->services->pluck( 'name' );
		$this->car_brand           = $service_request->carBrand->name;
		$this->car_type            = $service_request->carType->type;
		$this->car_model           = $service_request->car_model;
		$this->car_year            = $service_request->car_year;
		$this->address             = $service_request->address;
		$this->excet_address       = $service_request->exact_location;
		$this->preferred_time      = $service_request->preferred_service_time;

	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return \Illuminate\Broadcasting\Channel|array
	 */
	public function broadcastOn() {
		return new PrivateChannel( 'service_partner.' . $this->service_partner_id );
	}
}
