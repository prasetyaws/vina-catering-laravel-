<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiModel;

class transaksicontroller extends Controller
{
    public function index()
	{

		return view('dashboard');

	}

    public function get_transaksi()
    {
    	$data = TransaksiModel::all();
        return view('admin/transaksi',compact('data'));
    }

    public function tambah_pelanggan()
    {
    	 return view('tambahmenu');
    }

   public function edit_pelanggan(){}

   public function delete_pelanggan(){}
}
