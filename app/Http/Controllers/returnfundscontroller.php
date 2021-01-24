<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fund;

class returnfundscontroller extends Controller
{
    //
    function show(){
        $data=fund::all();

        return view('availablefunds',['funds'=>$data]);
    }
}
