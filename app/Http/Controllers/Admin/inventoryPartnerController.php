<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inventoryPartnerController extends Controller
{
    public function index(){
    	return view('admin.inventory_partner.index');
    }
}
