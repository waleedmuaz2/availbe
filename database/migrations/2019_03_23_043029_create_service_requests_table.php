<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'service_requests', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->char( 'uid',32 );
			$table->unsignedInteger( 'car_brand_id' );  // in future may  use relational table
			$table->unsignedInteger( 'car_category_id' );  // in future may  use relational table
			$table->unsignedInteger( 'car_type_id' );   // in future may  use relational table
			$table->string( 'car_model' );
			$table->year( 'car_year' );
			$table->smallInteger( 'number_of_wheels' );
			$table->timestamp( 'preferred_service_time' );
			$table->string( 'message' )->nullable();
			$table->string( 'user_email' )->index();
			$table->boolean( 'confirmed' )->default( false );  // it will be confirmed by customer
			$table->boolean( 'decline' )->default( false );// it will be decline by admin or service provider
			$table->boolean( 'complete' )->default( false );// it will be compelete by admin or service provider
			$table->unsignedInteger( 'service_provider_id' )->nullable()->default( null );  // basically a (user)service partner id
			$table->unsignedInteger( 'service_category_id' );
			$table->unsignedInteger( 'state_id' );
			$table->string( 'address_2' )->nullable();
			$table->char( 'address', 128 );
			$table->float( 'lat', 10, 6 );
			$table->float( 'lng', 10, 6 );

			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'service_requests' );
	}
}
