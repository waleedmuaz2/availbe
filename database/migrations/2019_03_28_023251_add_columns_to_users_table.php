<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table( 'users', function ( Blueprint $table ) {
			$table->string( 'first_name' );
			$table->string( 'last_name' )->nullable();
			$table->string( 'company_name' )->nullable();
			$table->string( 'phone' )->nullable();
			$table->char( 'state', 32 );
			$table->unsignedSmallInteger( 'state_id' )->nullable();
			$table->unsignedSmallInteger( 'country_id' )->nullable();
			$table->boolean( 'online_status' )->default( false );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'users', function ( Blueprint $table ) {
			//
		} );
	}
}
