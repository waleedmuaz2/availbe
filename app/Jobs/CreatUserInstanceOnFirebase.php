<?php

namespace App\Jobs;

use App\Providers\Firebase;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreatUserInstanceOnFirebase implements ShouldQueue {
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	private $user;
	private $type;

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct( $user, $type ) {
		//
		$this->user = $user;
		$this->type = $type;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle() {
		$firebase = Firebase::Init();
		$database = $firebase->getDatabase();
		$data     = [];
		$ref      = '';

		if ( $this->type == 'customer' ) {
			$ref  = 'customers/' . $this->user->uid;
			$data = [
				'user_id'  => $this->user->id,
				'user_uid' => $this->user->uid,
				'email'    => $this->user->email,
				'online'   => false,
			];
		} else {
			$ref  = 'service_partner/' . $this->user->uid;
			$data = [
				'user_id'  => $this->user->id,
				'user_uid' => $this->user->uid,
				'email'    => $this->user->email,
				'online'   => false,
				'type'     => $this->type,
				'state'    => $this->user->state->name
			];
		}

		$database->getReference( $ref )
		         ->set( $data );

	}
}
