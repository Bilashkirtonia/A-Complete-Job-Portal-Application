<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job_category;

class AllJobsController extends Controller
{
    public function index(){
        $data['all_categories'] = Job_category::all();
        return view('front.job_category.all_jobs_category',$data);
    }

    public function all_jobs(){
        $data['all_categories'] = Job_category::all();
        return view('front.all_jobs',$data);
    }
}


