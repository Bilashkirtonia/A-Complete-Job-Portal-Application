<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageOtherItem;
use App\Models\Company;
use App\Models\Candidate;
use App\mail\Websitemail;
use Hash;
use Auth;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        $page_other_data = PageOtherItem::where('id',1)->first();
        return view('front.layout.forget_password',compact('page_other_data'));
    }

    public function front_candidate_Forget_password(){
        $page_other_data = PageOtherItem::where('id',1)->first();
        return view('front.layout.front_candidate_Forget_password',compact('page_other_data'));
    }

    

    public function company_forget_password(Request $request){
        
        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Company::where('email',$request->email)->first();
        if(!$admin_data){
            return redirect()->back()->with('error','Email is not found');
        }

        $token = hash('sha256',time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('front/reset/password/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $message = "Please click the link to reset your password: <a href='$reset_link'>Click here</a>";

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        
        return redirect()->route('front_login')->with('success','Reset password link has been sent to your email');
        
    }

    public function company_forget_password_submit($token,$email){

        $admin_data = Company::where('email',$email)->where('token',$token)->first();
        if(!$admin_data){
            return redirect()->back()->with('error','Email is not found');
        }
        return view('front.layout.reset_password',compact('email','token'));
    }

    public function company_reset_password_submit(Request $request){
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $admin_data = Company::where('email',$request->email)->where('token',$request->token)->first();
        if(!$admin_data){
            return redirect()->back()->with('error','Email is not found');
        }

        $admin_data->password = Hash::make($request->password);
        $admin_data->token = '';
        $admin_data->update();

        return redirect()->route('front_login')->with('success','Password has been changed successfully');

    }
    public function candidate_forget_password(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $candidate_data = Candidate::where('email',$request->email)->first();

        if(!$candidate_data){
            return redirect()->back()->with('error','Email is not found');
        }

        $token = hash('sha256',time());

        $candidate_data->token = $token;
        $candidate_data->update();

        $reset_link = url('candidate/front/reset/password/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $message = "Please click the link to reset your password: <a href='$reset_link'>Click here</a>";
    
        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        return redirect()->route('front_login')->with('success','Reset password link has been sent to your email');

    }

    public function candidate_password_verify($token,$email){
        $candidate_data = Candidate::where('email',$email)->where('token',$token)->first();
        if(!$candidate_data){
            return redirect()->back()->with('error','Email is not found');
        }
        return view('front.layout.candidate_reset_password',compact('email','token'));
    }

    public function candidate_reset_password_submit(Request $request){
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $candidate_data = Candidate::where('email',$request->email)->where('token',$request->token)->first();
        if(!$candidate_data){
            return redirect()->back()->with('error','Email is not found');
        }

        $candidate_data->password = Hash::make($request->password);
        $candidate_data->token = '';
        $candidate_data->update();

        return redirect()->route('front_login')->with('success','Password has been changed successfully');

    }



}
