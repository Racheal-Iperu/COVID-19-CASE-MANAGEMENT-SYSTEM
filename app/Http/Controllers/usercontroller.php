<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generalhealthofficer;

class usercontroller extends Controller
{
    function adddata(Request $req){
        $generalhealthofficer=new generalhealthofficer;
        $generalhealthofficer->Name=$req->name;
        $generalhealthofficer->username=$req->username;
        $generalhealthofficer->gender=$req->gender;
        $generalhealthofficer->email=$req->EMAIL;
        $generalhealthofficer->phone=$req->PHONE;
        $generalhealthofficer->save();
        return redirect('add');

    }
}


