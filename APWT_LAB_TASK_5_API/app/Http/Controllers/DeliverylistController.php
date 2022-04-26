<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deliverylist;

class DeliverylistController extends Controller
{
    //
    function show(){
       $data= deliverylist::all();
        return view('list',['deliverylists'=>$data]);
    }
}
