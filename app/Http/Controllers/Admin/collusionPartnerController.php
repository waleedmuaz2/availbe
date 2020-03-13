<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class collusionPartnerController extends Controller
{
    public function index(){
    	return view('admin.collusion_partner.index');
    }
}
