<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon;
use App\User;
use Mail;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $checkverified = Admin::where('email_verified_at','=','NULL');

        if(!$userInfo){
            return back()->with('fail','Email address not recognized, Please Sign Up');
        }else{
            if(Hash::check($request->password, $userInfo->password) && !isset($checkverified)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }elseif(isset($checkverified)){
                return back()->with('fail', 'Please verify your email to continue');
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
            return redirect()->route('auth.register')->with('fail','INVALID URL');
        }else{
            if($admin->email_verified_at){
                return redirect()->route('auth.login')->with('fail','Email already verified');
            }else{
                $admin->update([
                    'email_verified_at'=>Carbon::now()
                ]);

                return redirect()->route('auth.login')->with('success','Email successfully verified');
            }
        }
    }
}