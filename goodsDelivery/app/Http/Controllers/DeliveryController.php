<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;




class DeliveryController extends Controller
{
    function show(){
        return delivery::all();
        return view('list',['delivery'=>$data]);
    }

    function register(Request $req){
        $user= new User;
        $user->name= $req -> input('name');
        $user->password= Hash::make($req -> input('password'));
        $user->phone= $req -> input('phone');
        $user->type= $req -> input('type');
        
        $user-> save();

        return $user;
    }
}

