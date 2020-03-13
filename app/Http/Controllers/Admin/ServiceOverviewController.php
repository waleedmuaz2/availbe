<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceOverviewController extends Controller
{
    public function serviceOverview(){
    	return view('admin.Service.overview');
    }
}
