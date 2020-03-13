<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'countries', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->char( 'name', 32 );
			$table->char( 'code' )->nullable();
			$table->string( 'flag' )->nullable();
			$table->boolean( 'available' )->default( true );
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'countries' );
	}
}
