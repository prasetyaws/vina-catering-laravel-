<?php

namespace App\Http\Controllers;
use App\admin;

use Illuminate\Http\Request;

class Admin extends Controller
{
	public function index()
	{

		return view('dashboard');

	}

    public function get_menu()
    {
    	$data = Admin::all();
        return view('kontak',compact('data'));
    }
}
