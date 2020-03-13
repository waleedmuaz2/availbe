<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class towingPartnerController extends Controller
{
    public function index(){
    	return view('admin.towing_partner.index');
    }
}
