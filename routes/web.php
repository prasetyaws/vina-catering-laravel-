<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Actor;
use Illuminate\Http\Request;

Route::get('/admin', function () {
    return view('dashboard');
});


Auth::routes();

Route::get('/customer', 'customercontroller@index')->name('menu.utama');
Route::get('/dashboard', 'menucontroller@index');
Route::get('/menu', 'menucontroller@get_menu');
Route::get('/tambahmenu', 'menucontroller@tambah_menu');
Route::get('/pelanggan', 'pelanggancontroller@get_pelanggan');
Route::get('/transaksi', 'transaksicontroller@get_transaksi')->name('menu.tambahmenu');
Route::post('/menu', 'menucontroller@store')->name('menu.store');
Route::get('/menu/delete/{id}','menucontroller@destroy')->name('menu.delete');
Route::get('/signin', 'logincontroller@admin')->name('login');
Route::get('/signup', 'logincontroller@daftar')->name('daftar');


Route::get('menu/edit/{id}','menucontroller@edit')->name('menu.edit');
Route::patch('/update/{id}','menucontroller@update')->name('menu.update');

Route::get('/makanan', 'customercontroller@makanan')->name('menu.makanan');
Route::get('/minuman', 'customercontroller@minuman')->name('menu.minuman');
Route::get('/paket', 'customercontroller@paket')->name('menu.paket');
Route::get('/kue', 'customercontroller@kue')->name('menu.kue');





