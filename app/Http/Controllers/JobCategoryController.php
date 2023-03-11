<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_category;

class JobCategoryController extends Controller
{
    public function index(){
        $data['all_category'] = Job_category::all();
        return view('admin.job.home_job_category',$data);
    }

    public function create(){
        return view('admin.job.home_job_category_create');
    }

    public function add(Request $request){
        $request->validate([
            'category_name' =>'required',
            'icons' =>'required'
        ]);

        $data = new Job_category();
        $data->category = $request->category_name;
        $data->icons = $request->icons;
        $data->save();
        return redirect()->route('home_job_category')->with('success','Data updated successfully');
    }

    public function edit($id){
        $data['all_category_edit'] = Job_category::where('id',$id)->first();
        return view('admin.job.home_job_category_edit',$data);
    }

    public function update(Request $request,$id){
        $request->validate([
            'category_name' =>'required',
            'icons' =>'required'
        ]);

        $data = Job_category::where('id',$id)->first();
        $data->category = $request->category_name;
        $data->icons = $request->icons;
        $data->save();
        return redirect()->route('home_job_category')->with('success','Data updated successfully');
    }

    public function delete($id){
        Job_category::where('id',$id)->first()->delete();
        return redirect()->route('home_job_category')->with('success','Data updated successfully');
    }

    
}
