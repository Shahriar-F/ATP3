<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginSubmit(Request $request){
        $validate = $request->validate([
            'userName' => 'required',
            'password' => 'required'
        ]);

        $userName = $request->input('userName');
        $password = $request->input('password');

        $user = users::where('name', $request->userName)
            ->where('password', $request->password)
            ->first();

        if($user && $user->accountType == "admin"){
            $request->session()->put('user', $user->id);
            return redirect()->route('homeAdmin');
        }
        elseif($user && $user->type == "user"){
            $request->session()->put('user', $user->id);
            return redirect()->route('homeUser');
        }
        else{
            return "User name and Password do not match";
        }
    }
    public function logout(){
        session()->forget('user');
        return view('login');
    }
}