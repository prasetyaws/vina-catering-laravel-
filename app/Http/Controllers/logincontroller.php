<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\input;
use app\LoginModel;
use DB;

class logincontroller extends Controller
{
    public function admin(){

    	return view('login/login');
    }

    public function daftar(){

    	return view('login/register');

    }

    public function submit(Request $request){

    
         
    }
}

