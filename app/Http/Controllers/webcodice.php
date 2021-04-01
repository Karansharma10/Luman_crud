<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insertdata;

class webcodice extends Controller
{
     function test(Request $request){

        $name = $request->input('name');

        echo $name;
     }

     function demo(Request $request){

        
        // $data =  insertdata:: all();
      
   
        return view('one');
     }

     function insert(Request $request){

        $data2 = new insertdata();
        $data2->name =  $request->input('name');
        $data2->email =  $request->input('email');
        $data2->save();


      return view('one');

     }

     function show(){

     echo 'hello';

      return view('show');

      
     }
      
    
}