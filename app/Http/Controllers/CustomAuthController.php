<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CustomAuthController extends Controller
{
    //login 
    public function login()
    {
        return view('auth.login');
    }

    // registraton 
    public function registration()
    {
        return view('auth.registration');
    }

    //Registered User 
    public function registerUser(Request $request)
    {
        //validate data 
        $request->validate([
            'name'        =>  'required',
            'email'       =>  'required|email|unique:users',
            'password'    =>  'required|max:12|min:6'
        ]);

        // save data into DB
        $user             =    new User();
        $user->name       =    $request->name;
        $user->email      =    $request->email;
        $user->password   =    Hash::make($request->password);
        $res              =    $user->save();

        //Show Sucess message 
        if ($res) {
            return back()->with('success', 'You have been registered successfuly');
        } else {
            return back()->with('fail', 'Something going wrong');
        }
    } // End of Registration Process 

    //User Login
    public function loginUser(Request $request)
    {
        //validate data 
        $request->validate([
            'email'       =>  'required|email',
            'password'    =>  'required|max:12|min:6'
        ]);

        // login logics
        $user = User::where('email', '=', $request->email)->first(); //user already exist or not in DB
        if ($user) {

            // Check credentials match if match then login else show failure message 
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    //
    public function dashboard() {


        return view('products\dashboard');
        // return "Welcome!! To Dashboard";
    }

    public function logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
    
}
