<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;



class admincontroller extends Controller
{
    public function index(){

        return view('admin.homeAdmin');
        
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

                public function userList(){

                    $users = users::where('accountType', 'user')->get();
                    return view('admin.list')->with('users', $users);
                    
                    }

                    public function addUser(){

                        return view('addUser');
                        
                        }
                
               
                
            
}