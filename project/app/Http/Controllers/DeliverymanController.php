<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\deliveryman;
use App\Http\Requests\StoredeliverymanRequest;
use App\Http\Requests\UpdatedeliverymanRequest;

class DeliverymanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredeliverymanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredeliverymanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function show(deliveryman $deliveryman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function edit(deliveryman $deliveryman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedeliverymanRequest  $request
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedeliverymanRequest $request, deliveryman $deliveryman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function destroy(deliveryman $deliveryman)
    {
        //
    }

    public function registration(){

        return view('registration');
        
        }

        public function login(){

            return view('login');
            
            }
            public function deliverylist(){

                return view('deliverylist');
                
                }
            
            public function registrationsubmit(Request $request){
                $validate = $request->validate([
                    'name' => 'required|min:2|max:20',
                    
                    'dob' => 'required',
                    'phone' => 'required|min:11',
                    'email' => 'email',
                    'password' => 'required'
                ],
                [
                    'name.required'=>'Enter Your Name'
                ]
            );
            $deliveryman = new Deliveryman();
            $deliveryman-> name =$request -> name;
            $deliveryman-> dob =$request -> dob;
            $deliveryman-> phone =$request -> phone;
            $deliveryman-> email =$request -> email;
            $deliveryman-> password =$request -> password;
            $deliveryman -> save();
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
