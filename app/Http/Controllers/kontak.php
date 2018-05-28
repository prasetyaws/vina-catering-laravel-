<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuModel;



class kontak extends Controller
{
    public function index()
    {
    	return view('menu');
    }

    public function port(Request $request)
    {

       $data = new MenuModel();
       $data->nama = $request->nama;
       $data->category = $request->category;
       $data->harga = $request->harga;
       $data->deskripsi = $request->deskripsi;
       $data->save();
       return redirect()->route('kontak.index');

    }
}
