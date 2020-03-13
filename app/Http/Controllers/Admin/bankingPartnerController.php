<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bankingPartnerController extends Controller
{
    public function index(){
    	return view('admin.banking_partner.index');
    }
}
