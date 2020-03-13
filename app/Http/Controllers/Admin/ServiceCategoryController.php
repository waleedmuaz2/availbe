<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class ServiceCategoryController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$serviceCategories = ServiceCategory::all();
		return view( 'admin.service_category.index', compact('serviceCategories'));
	}
	public function create() {
		return view('admin.service_category.add-new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		//TODO validation imp
		$request->validate([
			'slang' => 'required|unique:permissions,name',
		]);
		ServiceCategory::create( $request->all() );
		Permission::create( [
			'name'         => $request->slang,
			'display_name' => $request->name,
			'type'         => 'service_category'
		] );

		return redirect()->back()->with('flash_message_success', 'Service Category has been Added successfully');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\ServiceCategory $serviceCategory
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( Request $request, $id) {
		$request->validate([
			'slang' => 'required|unique:permissions,name,'. $id.',id',
		]);
		$data = $request->all();
		ServiceCategory::where(['id'=>$id])->update(['name'=>$data['name'],'slang'=>$data['slang']]);
		$serviceCategories = ServiceCategory::all();
		return view( 'admin.service_category.index', compact('serviceCategories'))->with('flash_message_success', 'service has been Updated successfully');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\ServiceCategory $serviceCategory
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$category = ServiceCategory::findOrFail($id);
        return view('admin.service_category.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\ServiceCategory $serviceCategory
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\ServiceCategory $serviceCategory
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$service_cat = ServiceCategory::find($id);
        $service_cat->delete();
        return redirect()->back()->with('flash_message_success', 'Service Category has been deleted successfully');
	}
}
