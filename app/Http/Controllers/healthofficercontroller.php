<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class healthofficercontroller extends Controller
{
    //
    function assign(){
        return DB::table('_general_hospital')->min('number-of-HO');
    }
}
