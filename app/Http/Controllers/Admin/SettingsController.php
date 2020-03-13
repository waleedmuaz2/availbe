<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CarBrand;

class SettingsController extends Controller
{
    public function profile(){
    	return view('admin.settings.profile');
    }

    public function getCarType(Request $request){
    	$matched_car_type = CarBrand::where('car_category_id',$request->input('id'))->get();
        return $matched_car_type;
    }
}
