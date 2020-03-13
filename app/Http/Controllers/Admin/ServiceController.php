<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\CarType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class ServiceController extends Controller {

	public function __construct() {

	}

	public function index() {
		$services = Service::all();
		return view( 'admin.Service.index', compact('services'));
	}
	public function create() {
		$serviceCategories = ServiceCategory::all();
		$carCategories = CarType::all();
		return view( 'admin.Service.create', compact('serviceCategories','carCategories') );
	}

	//for update the data
	public function show(Request $request, $id) {
		$data = $request->all();
		Service::where(['id'=>$id])->update(['name'=>$data['name'],'slang'=>$data['slang'], 'service_category_id'=>$data['service_category_id'],'selected_car_category_id'=>$data['selected_car_category_id'],'car_type_id'=>$data['car_type_id'], 'cost'=>$data['cost']]);
		$serviceCategories = Service::all();
		return redirect()->route('admin.service.index')->with('flash_message_success', 'Service has been Updated successfully');
	}

	public function store( Request $request ) {
		//TODO validation imp
		$request->validate( [
			'slang' => 'required|unique:permissions,name',
		] );

		Service::create( $request->all() );
		if ( $request->service_category_id ) {
			Permission::create( [
				'name'         => $request->slang,
				'display_name' => $request->name,
				'type'         => 'service'
			] );
		} else {
			Permission::create( [
				'name'         => $request->slang,
				'display_name' => $request->name,
				'type'         => 'extra_service'
			] );
		}

		return redirect()->back()->with('flash_message_success', 'service has been Added successfully');
	}

	public function edit($id){
		$carCategories = CarType::all();
		$serviceCategories = ServiceCategory::all();
		$service = Service::find($id);


        return view('admin.Service.edit', [
            'service' => $service,
            'serviceCategories' => $serviceCategories,
            'carCategories' => $carCategories,
        ]);
	}

	public function update(Request $request, $id){
		return 'hi';
	}

	public function destroy($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('flash_message_success', 'service has been deleted successfully');
    }
}
