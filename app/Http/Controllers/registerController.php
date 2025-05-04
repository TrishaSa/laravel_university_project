<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index(){
        return view ('registration');
    }

    public function register(Request $request){
        $user = new Registration();
        $user->name =  $request->user_name;
        $user->email =  $request->user_email;
        $user->password =Crypt::encrypt( $request->user_pass) ;
    
        $user->save();

        $request->session()->put('user', $user->name);
        return redirect(('/login'));
    }

    public function login(){
        return view('login');
    }

    public function loginStore(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = Registration::where('email', $email)->first();
    
        if ($user && Hash::check($password, $user->password)) {
            $request->session()->put('user', $user->name);
            return redirect('/studentList');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
    
}
