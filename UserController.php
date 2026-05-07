<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function getUser(){
        return "using Controller ";
    }

    function aboutUser(){
        return "hello";
    }
    function getUserName($name){
        return view('getuser',['name'=>$name]);
    }

    function adminLogin(){
        return view('admin.login');
    }


    function userHome(){

        $name="aman";
        $users=['amrit','aman','raj'];
        return view('home',["name"=>$name,"users"=>$users]);
    }
}

