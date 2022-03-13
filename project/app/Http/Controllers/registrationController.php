<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function registration(){
        return view('registration');
    }
    public function registrationsubmit(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required',

            
        ],
        [
            'name.required'=>'Enter Your Name',
            'password.required'=>'Enter Your Password'
        ]
    );
        $deliveryman = new deliveryman();
        $deliveryman->name = $request->name;
        $deliveryman->dob = $request->dob;
        $deliveryman->gender = $request->gender;
        $deliveryman->phonenumber = $request->phone;
        $deliveryman->password = $request->password;
        
        $user->save();

        return view('home');
    }
}
