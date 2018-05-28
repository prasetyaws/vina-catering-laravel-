<?php

namespace App\Http\Controllers;
use App\MenuModel;
use DB;

use Illuminate\Http\Request;
use Illuminate\support\facades\input;

class MenuController extends Controller
{
	public function index()
	{

		return view('admin/dashboard');

	}

    public function get_menu()
    {
    	  $data = MenuModel::all();
        return view('admin/menu',compact('data'));
    }
    

    public function tambah_menu()
    {
    	 return view('admin/tambahmenu');
    }




      public function store(Request $request)
    {
      
       if($request->hasfile('foto'))
       {

       $data = new MenuModel();
       $data->nama = $request->nama;
       $data->category = $request->category;
       $data->harga = $request->harga;
       $data->deskripsi = $request->deskripsi;
       $data->foto = $request->foto; 

       $ext = $data->foto->getClientOriginalExtension();
       $newName = $data->foto->getClientOriginalName().".".$ext;
       $data->foto->move('upload/menu',$newName);
       $data->foto = $newName;

       }

       $data->save();
       return redirect()->route('menu.tambahmenu')->with('alert-success','Berhasil Menambahkan Menu');
         
    }

    public function destroy($id)
    {
        $id = request()->segment(3);
        DB::delete('delete from menu where id_menu = ?',[$id]);
        return redirect()->back();
    }


   public function edit($id_menu )
   {
      $id    = request()->segment(3);
      $data  = DB::table('menu')
                  ->where('id_menu', $id)
                  ->first();

      return view('admin/editmenu', compact('data'));
   }


   public function update($id)
   {

      DB::table('menu')->where('id_menu', $id)->update(array(

                  'nama' => input::get('nama'),
                  'category' =>input::get('category'),
                  'harga' => input::get('harga'),
                  'deskripsi' => input::get('deskripsi')
            ));

      return back();
   }



}
