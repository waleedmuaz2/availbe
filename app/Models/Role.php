<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpartiaRoleModel;

class Role extends SpartiaRoleModel {

	public static function create( array $attributes = [] ) {
		$attributes['guard_name'] = $attributes['guard_name'] ?? Guard::getDefaultName( static::class );

		if ( static::where( 'name', $attributes['name'] )->where( 'guard_name', $attributes['guard_name'] )->first() ) {
			throw RoleAlreadyExists::create( $attributes['name'], $attributes['guard_name'], $attributes['display_name'] );
		}

		if ( isNotLumen() && app()::VERSION < '5.4' ) {
			return parent::create( $attributes );
		}

		return static::query()->create( $attributes );
	}
}
