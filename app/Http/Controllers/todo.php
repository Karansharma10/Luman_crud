<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo1;
// session_start();
class todo extends Controller
{

    function index(){

        
        $data =  todo1::where('user_id',$_COOKIE['id'])->get();

        return view('todo',['data' => $data]);
      

    }

    function inserttodo(Request $request){

        $data2 = new todo1();
        $data2->name =  $request->input('name');
        $data2->user_id = $_COOKIE['id'];
        $data2->save();

        $this->index();

        return redirect('todo');
    }

    function deletetodo(Request $demo){

        todo1::where('id',$demo->id)->delete();

        return redirect('todo');
    }

    function updatetodo(Request $demo){

        todo1::where('id',$demo->id)
        ->update([
             'name' => $demo->n
 
         ]);

        return redirect('todo');
    }
}