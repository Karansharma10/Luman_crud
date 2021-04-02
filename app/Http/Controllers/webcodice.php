<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insertdata;
use App\Models\login;
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

      $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = base_path().'\public\UserImages';
        $image->move($destinationPath, $name);


        $data2 = new insertdata();
        $data2->username =  $request->input('name');
        $data2->email =  $request->input('email');
        $data2->password =  $request->input('password');
        $data2->image =  $name;


        $data2->save();

        $data = new login();
        $data->username =  $request->input('name');
        $data->password =  $request->input('password');
        $data->save();

      return redirect('one');

     }

     function show(){

     echo 'hello';

      return view('show');

      
     }
      
    
}