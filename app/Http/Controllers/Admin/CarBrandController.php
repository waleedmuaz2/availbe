<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use App\Models\CarType;
use Illuminate\Http\Request;

class CarBrandController extends Controller {
	private $CarBrand;

	public function __construct() {
		$this->CarBrand = (CarBrand::all())->sortBy( 'name' );

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public $asd = 'ascasc';

	public function index() {
		return view( 'admin.CarBrand.index', [ 'carBrands' => $this->CarBrand ] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$car_category = CarType::all();
		return view( 'admin.CarBrand.create', [ 'carBrands' => $this->CarBrand ], compact('car_category') );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {

		$carBrand = CarBrand::create( $request->only( [ 'name', 'car_category_id','desc', 'avatar' ] ) );

		return redirect()->back()->with('flash_message_success', 'Car Type has been Added successfully');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( CarBrand $carBrand ) {
		$car_category = CarType::all();
		return view( 'admin.CarBrand.edit', [ 'carBrands' => $this->CarBrand, 'car' => $carBrand ,'car_category'=>$car_category] );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, CarBrand $carBrand ) {
		$carBrand = $carBrand->update( $request->only( [ 'name', 'car_category_id', 'desc', 'avatar' ] ) );

		return redirect()->back()->with('flash_message_success', 'Car Type has been Updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id){
        $carBrand = CarBrand::find($id);
        $carBrand->delete();
        return redirect()->back()->with('flash_message_success', 'Car Type has been deleted successfully');
    }
}
