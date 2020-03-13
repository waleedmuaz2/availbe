<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller {
	private $CarT;

	public function __construct() {
		$this->CarT = (CarType::all())->sortBy( 'type' );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index() {
		return view( 'admin.CarType.index', [ 'carTypes' => $this->CarT ] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view( 'admin.CarType.create', [ 'carTypes' => $this->CarT ] );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		CarType::create( $request->only( [ 'type', 'desc', 'avatar' ] ) );

		return redirect()->back()->with('flash_message_success', 'Car Category has been Added successfully');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( CarType $car_type ) {
		return view( 'admin.CarType.edit', [ 'carTypes' => $this->CarT, 'carT' => $car_type ] );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, CarType $car_type ) {
		$car_type->update( $request->only( [ 'type', 'desc', 'avatar' ] ) );

		return redirect()->back()->with('flash_message_success', 'Car Category has been Updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function destroy($id){
        $car_type = CarType::find($id);
        $car_type->delete();
        return redirect()->back()->with('flash_message_success', 'Car Category has been deleted successfully');
    }
}
