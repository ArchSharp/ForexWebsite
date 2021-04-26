<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Password;
use Carbon\Carbon;
use App\User;
use Mail;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Mail\EmailVerificationMail;
use App\Mail\PasswordVerificationMail;
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

    function resetpassword(){
        return view('auth.reset_password');
    }

    function resetpasswordform(){
        return view('auth.resetpasswordform');
    }

    

    function save(Request $request){
        //return $request->input();
        //validate request
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:18',
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
            'password'=>'required|min:5|max:18'
        ]);
        
        $userInfo = Admin::where('email','=',$request->email)->first();
        
        if(!$userInfo){
            return back()->with('fail','Email address not recognized, Please Sign Up');
        }else{
            if(Hash::check($request->password, $userInfo->password) && $userInfo->email_verified_at != null){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }elseif($userInfo->email_verified_at == null){
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
                return redirect()->route('auth.register')->with('fail','Email already verified');
            }else{
                $admin->update([
                    'email_verified_at'=>Carbon::now()
                ]);

                return redirect()->route('auth.register')->with('success','Email successfully verified');
            }
        }
    }

    //for reset password

    function resetpass(Request $request){
        //return $request->input();

        //validate
        $request->validate([
            'email'=>'required|email'
        ]);

        //insert data
        $user = new Password;
        $user->email = $request->email;
        $user->token = Str::random(40);
        $save = $user->save();
        
        $checkUserEmail = Admin::where('email','=',$request->email)->first();
        
        if(!$checkUserEmail){
            return back()->with('fail','Email address not recognized, Please Sign Up');
        }elseif($save && $checkUserEmail){
            Mail::to($request->email)->send(new PasswordVerificationMail($user));
            return back()->with('success','Click the link sent to your email address to change your password.');
        }
    }

    //verify password reset

    public function verify_passreset($verification_code){
        // You were quering the users table instead of the admins
        // Also the field is email_verification_code not email_verified_at
        $userpasstoken=Password::where('token', $verification_code)->first();
        if(!$userpasstoken){
            return redirect()->route('auth.register')->with('fail','INVALID URL');
        }else{
            if($userpasstoken->token){
                return redirect()->route('auth.login')->with('fail','Password already changed using this link');
            }else{
                $userpasstoken->update([
                    'created_at'=>Carbon::now()
                ]);
                

                return redirect()->route('auth.resetpasswordform')->with('success','Reset your password');
                //return view('auth.resetpassword_form');
            }
        }
    }

}