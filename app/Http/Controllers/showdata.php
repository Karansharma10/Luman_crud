<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insertdata;

class showdata extends Controller
{
    //
    function show(){

        $data =  insertdata::all();

        return view('show',['data' => $data]);
    }
}