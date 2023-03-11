<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\mail\Websitemail;
use Hash;
use Auth;


class adminLoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

   public function admin_login_submit(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('admin');
        }else{
            return redirect()->route('login')->with('error','Email or password is incorrect');
        }
   }

   public function forgat_password(){
    return view('admin.auth.forgat_password');
    }

    public function admin_reset_password(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data){
            return redirect()->back()->with('error','Email is not found');
        }

        $token = hash('sha256',time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('/reset/password/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $message = "Please click the link to reset your password: <a href='$reset_link'>Click here</a>";

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        
        return redirect()->route('login')->with('success','Reset password link has been sent to your email');
        
    }

    public function reset_password($token,$email){
        $admin_data = Admin::where('email',$email)->where('token',$token)->first();
        if(!$admin_data){
            return redirect()->route('login')->with('error','Invalid token or email');
        }
        return view('admin.auth.reset_password',compact('token','email'));
    }

    public function reset_password_submit(Request $request){
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);        

        $admin_data = Admin::where('email',$request->email)->where('token',$request->token)->first();
        if(!$admin_data){
            return redirect()->route('login')->with('error','Invalid token or email');
        }

        $admin_data->password = Hash::make($request->password);
        $admin_data->token = '';
        $admin_data->update();
       return "Password has been changed successfully";
       // return redirect()->route('login')->with('success','Password has been changed successfully');
    }


    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}

