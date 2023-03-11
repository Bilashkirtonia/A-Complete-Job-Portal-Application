<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageOtherItem;
use App\Models\Company;
use Auth;


class LoginController extends Controller
{
    public function index()
    {
        $page_other_data = PageOtherItem::where('id',1)->first();
        return view('front.layout.login',compact('page_other_data'));
    }

    public function company_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('company')->attempt($credentials)){
            return redirect()->route('company_dashboard');
        }else{
            return redirect()->route('front_login')->with('error','Invalid Email or Password');
        }
    }
    

    public function company_logout(){
        Auth::guard('company')->logout();
        return redirect()->route('front_login');
    }

    public function front_candidate_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('candidate')->attempt($credentials)){
            return redirect()->route('candidate_dashboard');
        }else{
            return redirect()->route('front_login')->with('error','Invalid Email or Password');
        }
    }

    public function front_candidate_logout(){
        Auth::guard('candidate')->logout();
        return redirect()->route('front_login');
    }
}
