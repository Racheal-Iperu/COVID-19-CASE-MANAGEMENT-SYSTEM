<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fund;
class fundscontroller extends Controller
{
    function addfund(Request $req){
    $Fund=new Fund;
    $Fund->Amount=$req->amount;
    $Fund->Donor=$req->donor;
    $Fund->Date=$req->date;
    $Fund->save(); 
    return redirect('plus');   
    }
}
