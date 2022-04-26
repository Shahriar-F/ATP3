<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deliveryman;
use illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function register(Request $req){

        $deliveryman= new Deliveryman;
        $deliveryman->name= $req->input('name');
        $deliveryman->dob= $req->input('dob');
        $deliveryman->phone= $req->input('phone');
        $deliveryman->email= $req->input('email');
        $deliveryman->password= $req->input('password');
        $deliveryman->save();
        return $deliveryman;
    }
    function login(Request $req)
    {
        $deliveryman= Deliveryman::where('email',$req->email)->first();
        if(!$deliveryman )
        {
            return ["error"=>"Email or password doesn't match"];
        }
        return $deliveryman;
    }
    function deliverymanlist()
    {
        $deliveryman= Deliveryman::all();
        
        return $deliveryman;
    }
    
}
