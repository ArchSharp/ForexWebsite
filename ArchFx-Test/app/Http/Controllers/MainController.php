<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use Mail;
use App\Mail\EmailVerificationMail;
use App\User;

class MainController extends Controller
{
    //Go to home
    function home(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('home', $data);
    }
    //
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        //return $request->input();
        //validate request
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12',
            'confirm_password'=>'required|same:password',
        ]);

        //insert data
        $admin = new Admin;
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->email_verification_code = Str::random(40);
        $save = $admin->save();

        Mail::to($request->email)->send(new EmailVerificationMail($admin));

        if($save){
            return back()->with('success','Account created successfully.'."\n".'Click the link sent to your email to verify your email address.');
        }else{
            return back()->with('fail','something is missing');
        }
    }



    //login
    function check(Request $request){
        //return $request->input();

        //validate
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','Email address not recognized, Please Sign Up');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    public function verify_email($verification_code){
        // You were quering the users table instead of the admins
        // Also the field is email_verification_code not email_verified_at
        $admin=Admin::where('email_verification_code', $verification_code)->first();
        if(!$admin){
            return redirect()->route('auth.register')->with('error','INVALID URL');
        }else{
            if($admin->email_verified_at){
                return redirect()->route('auth.register')->with('error','Email already verified');
            }else{
                $admin->update([
                    'email_verified_at'=>Carbon::now()
                ]);

                return redirect()->route('auth.register')->with('success','Email successfully verified');
            }
        }
    }
}
