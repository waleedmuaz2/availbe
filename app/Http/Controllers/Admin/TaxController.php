<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        $taxes = Tax::all();
        return view('admin.tax.index', compact('taxes'));
    }

    public function create()
    {
        return view('admin.tax.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'state_name' => 'required',
            'tax_rate' => 'required',
        ]);
        Tax::create( $request->only( [ 'state_name', 'tax_rate'] ) );

        return redirect()->back()->with('flash_message_success', 'Tax has been Added successfully');
    }

    public function show(Request $request, $id)
    {
        $request->validate([
            'state_name' => 'required',
            'tax_rate' => 'required',
        ]);
        $data = $request->all();
        Tax::where(['id'=>$id])->update(['state_name'=>$data['state_name'],'tax_rate'=>$data['tax_rate']]);

        return redirect()->back()->with('flash_message_success', 'Tax has been Updated successfully');
    }

    public function edit($id)
    {
        $taxes = Tax::findOrFail($id);
        return view('admin.tax.edit', compact('taxes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'state_name' => 'required',
            'tax_rate' => 'required',
        ]);
        $data = $request->all();
        Tax::where(['id'=>$id])->update(['state_name'=>$data['state_name'],'tax_rate'=>$data['tax_rate']]);

        return redirect()->back()->with('flash_message_success', 'Tax has been Updated successfully');
    }

    public function destroy($id)
    {
        $tax = Tax::find($id);
        $tax->delete();
        return redirect()->back()->with('flash_message_success', ' Tax has been deleted successfully');
    }
}
