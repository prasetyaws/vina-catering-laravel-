<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PelangganModel;

class pelanggancontroller extends Controller
{
    public function index()
	{

		return view('dashboard');

	}

    public function get_pelanggan()
    {
    	$data = PelangganModel::all();
        return view('admin/pelanggan',compact('data'));
    }

    public function tambah_pelanggan()
    {
    	 return view('tambahmenu');
    }

   public function edit_pelanggan(){}

   public function delete_pelanggan(){}
}
