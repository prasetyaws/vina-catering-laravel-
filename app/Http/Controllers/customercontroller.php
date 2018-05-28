<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menuModel;
use DB;

class customercontroller extends Controller
{
	public function index()
	{
		
		$data = MenuModel::all();
        return view('customer/customer',compact('menucatering'));
	}

	public function makanan(){

		 $users = DB::table('menu')->where('category','makanan')->get();
     		 return view('customer/makanan',['data'=>$users]);

	}

	public function minuman(){

		 $users = DB::table('menu')->where('category','minuman')->get();
     		 return view('customer/minuman',['data'=>$users]);

	}

	public function kue(){

		 $users = DB::table('menu')->where('category','kue')->get();
     		 return view('customer/kue',['data'=>$users]);

	}

	public function paket(){

		 $users = DB::table('menu')->where('category','paket')->get();
     		 return view('customer/paket',['data'=>$users]);

	}

	public function catering(){

		 $users = DB::table('menu')->where('category','catering')->get();
     		 return view('customer/catering',['data'=>$users]);

	}


    
}
