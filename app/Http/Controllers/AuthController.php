<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('register', ["title" => 'Register']);
    }   

    public function submitRegister(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('login'); 
    }

    public function login(){
        return view('login', ["title" => 'Login']);
    }

    public function submitLogin(Request $request){
        $data = $request->only('username', 'password');

        if (Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect()->back()->with('failed', 'Username or Password is incorrect');   
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
