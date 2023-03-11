<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseItems;

class WhyChooseItemsController extends Controller
{
    public function index()
    {
        $data['why_choose_items'] = WhyChooseItems::all();
        return view('admin.why.why_job_items',$data);
    }

    public function create()
    {
        return view('admin.why.why_job_items_create');
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);

        $data = new WhyChooseItems();
        $data->heading = $request->name;
        $data->text = $request->text;
        $data->icon = $request->icon;
        $data->save();
        return redirect()->route('admin_why_choose_items')->with('success','Why Choose Items Added Successfully');
    }

    public function edit($id){
        $data['why_choose_items'] = WhyChooseItems::find($id);
        return view('admin.why.why_job_items_edit',$data);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);

        $data = WhyChooseItems::find($id);
        $data->heading = $request->name;
        $data->text = $request->text;
        $data->icon = $request->icon;
        $data->save();
        return redirect()->route('admin_why_choose_items')->with('success','Why Choose Items Updated Successfully');
    }
    public function delete($id){
        $data = WhyChooseItems::find($id);
        $data->delete();
        return redirect()->route('admin_why_choose_items')->with('success','Why Choose Items Deleted Successfully');
    }

    
}
