<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageContentUpdate;
use App\Models\Job_category;
use App\Models\WhyChooseItems;
use App\Models\Post;
use App\Models\PageTermItem;
use App\Models\PagePrivacyItem;
use App\Models\PageContactItem;
use App\Models\Package;


class HomeController extends Controller
{
    public function index(){
        $search_info = HomePageContentUpdate::where('id',1)->first();
        $data['all_categories'] = Job_category::all()->take(9);
        $data['why_choose_items'] = WhyChooseItems::all()->take(3);
        $data['all_posts'] = Post::all()->take(3);



        return view('front.home',compact('search_info'),$data); 
    }

    public function jobs(){
        return view('front.jobs'); 
    }

    public function companies(){
        return view('front.companies'); 
    }

    public function term(){
        $page_term_data = PageTermItem::where('id',1)->first();
        return view('front.terms',compact('page_term_data')); 
    }

    public function privacy(){
        $page_privacy_data = PagePrivacyItem::where('id',1)->first();
        return view('front.privacy',compact('page_privacy_data')); 
    }
    

    public function contact(){
        $page_contact_data = PageContactItem::where('id',1)->first();
        return view('front.contact',compact('page_contact_data')); 
    }

   public function pricing(){
        $page_pricing_data = Package::all();
        return view('front.pricing',compact('page_pricing_data')); 
    } 

    
}
