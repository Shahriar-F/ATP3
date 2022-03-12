<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index(){

        return view('home');
        
        }

        public function contactus(){

            return view('contactus');
            
            }

        public function registration(){

            return view('registration');
            
            }

            public function login(){

                return view('login');
                
                }
                
                public function registrationsubmit(Request $request){
                    $validate = $request->validate([
                        'name' => 'required|min:5|max:10',
                        'id' => 'required',
                        'dob' => 'required',
                        'phone' => 'required|min:11|max:14',
                        'email' => 'email'
                    ],
                    [
                        'name.required'=>'Enter Your Name'
                    ]
                );
                    return view('home');
                }

                public function loginsubmit(Request $request){
                    $validate = $request->validate([
                           'userName' => 'required',
                           'password' => 'required'
                    ]);
           
                    $userName = $request->input('userName');
                    $password = $request->input('password');
           
                    if($userName === "Shahriar" && $password === "1111"){
                       return view('home');
                    }
                    else{
                       return 
                       
                       "The User name and password you Provided is Wrong  
                                    PLEASE TRY AGAIN";
                                      
                    }
                    
               }
}