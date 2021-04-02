<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\insertdata;
session_start();
class logincontroller extends Controller
{
    
    function index(){

        return view('login');
    }

    function insertlogin(Request $res){

        
         $name =    $res->input('name');
           $password =  $res->input('password');

            $Productdata = login::where('username',$name)->get();
           $check = count($Productdata);

                $img =  insertdata::where('username',$name)->get();

         

            if ($check == 1) {

                $storage = $img[0]->image;
                $user_id = $img[0]->id;
        
                 $_SESSION["image"] = $storage;
                 $_SESSION['isLogin'] = true;
                 setcookie('id', $user_id, time() + (86400 * 30), "/");
                return redirect('todo');
            //    echo $_SESSION['image'];


            }
            if($check == 0){
                echo "<script>alert('User not Find')</script>";
                return redirect('/');               
            }

           
    }

    function logout(){

        // unset($_SESSION['image']);
        unset($_COOKIE['id']); 
        $_SESSION['isLogin'] = false; 
        return redirect('/');
    }
}