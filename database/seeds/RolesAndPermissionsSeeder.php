<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder {
	public function run() {
// Reset cached roles and permissions
		app()[ \Spatie\Permission\PermissionRegistrar::class ]->forgetCachedPermissions();
		$roles = [
			'admin',
			'customer',
			'service_partner',
			'inventory_partner',
			'towing_partner',
			'collusion_center_partner',
			'banking_partner',
			'insurance_partner',
		];

		foreach ( $roles as $role ) {
			Role::create( [ 'name' => $role ] );
		}
	}
}