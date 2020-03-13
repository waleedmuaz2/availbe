<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class insurancePartnerController extends Controller
{
    public function index(){
    	return view('admin.insurance_partner.index');
    }
}
