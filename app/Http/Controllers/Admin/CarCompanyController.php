<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarCompany;
use Illuminate\Http\Request;

class CarCompanyController extends Controller
{
    public function index()
    {
        $carCompanys = CarCompany::all();
        return view('admin.car_company.index', compact('carCompanys'));
    }

    public function create()
    {
        return view('admin.car_company.create');
    }

    public function store(Request $request)
    {
        $carCompany = CarCompany::create( $request->only( [ 'name','desc', 'avatar' ] ) );

        return redirect()->back()->with('flash_message_success', 'Car Brand has been Added successfully');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $carCompany = CarCompany::find($id);
        return view('admin.car_company.edit', compact('carCompany'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
            'name' => 'required',
        ]);
        $data = $request->all();
        CarCompany::where(['id'=>$id])->update(['name'=>$data['name'],'desc'=>$data['desc'], 'avatar' => $data['avatar']]);

        return redirect()->back()->with('flash_message_success', 'Brand been Updated successfully');
    }

    public function destroy($id)
    {
        $carCompany = CarCompany::find($id);
        $carCompany->delete();
        return redirect()->back()->with('flash_message_success', 'Car Brand been deleted successfully');
    }
}
