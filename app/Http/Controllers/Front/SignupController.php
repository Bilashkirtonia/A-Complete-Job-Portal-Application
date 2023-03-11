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



class SignupController extends Controller
{
    public function index()
    {
        $other_page_item = PageOtherItem::where('id',1)->first();
        return view('front.layout.signup',compact('other_page_item'));
    }

    public function company_sign_up(Request $request){
        $request->validate([
            'company_name' => 'required',
            'person_name' => 'required',
            'username' => 'required|unique:companies',
            'email' => 'required|email||unique:companies',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256',time());

        $obj = new Company();
        $obj->company_name = $request->company_name;
        $obj->person_name = $request->person_name;
        $obj->username = $request->username;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->token = $token;
        $obj->status = 0;
        $obj->save();

        $verify_link = url('/company/verify/'.$token.'/'.$request->email);
        $subject = "Verify your account";
        $message = "Please click the link to verify your account: <a href='$verify_link'>Click here for verify</a>";

        \Mail::to($obj->email)->send(new Websitemail($subject,$message));
        return redirect()->route('front_login')->with('success','Please check your email to verify your account');


    }

    public function company_signup_verify($token,$email){

        $company_data = Company::where('email',$email)->where('token',$token)->first();
        if(!$company_data){
            return redirect()->route('front_signup')->with('error','Invalid token or email');
        }

        $company_data->token = '';
        $company_data->status = 1;
        $company_data->update();

        return redirect()->route('front_login')->with('success','Verify successfull, please login!');
    }


    public function candidate_sign_up(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:candidates',
            'email' => 'required|email||unique:candidates',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256',time());

        $obj = new Candidate();
        $obj->name = $request->name;
        $obj->username = $request->username;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->token = $token;
        $obj->status = 0;
        $obj->save();

        $verify_link = url('candidate_signup_verify/'.$token.'/'.$request->email);
        $subject = 'Candidate Signup Verification';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="'.$verify_link.'">Click here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('login')->with('success', 'An email is sent to your email address. You must have to check that and click on the confirmation link to validate your signup.');
    }

    public function candidate_signup_verify($token,$email){

        $candidate_data = Candidate::where('email',$email)->where('token',$token)->first();
    
        if(!$candidate_data){
            return redirect()->route('front_signup');
        }

        $candidate_data->token = '';
        $candidate_data->status = 1;
        $candidate_data->update();

        return redirect()->route('front_login')->with('success','Verify successfull, please login!');
    }
}
