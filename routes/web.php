<?php

use App\Spesanan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');



Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    route::group(['middleware' => ['role:admin']],function(){
        //member
        Route::resource('/member','MemberController');
        Route::post('member/update/{id}','MemberController@update')->name('member.update');
        route::get('/member/destroy/{id}','MemberController@destroy')->name('member.destroy');
        //outlet
        Route::resource('/outlet','OutletsController');
        Route::post('outlet/update/{id}','OutletsController@update')->name('outlet.update');
        route::get('/outlet/destroy/{id}','OutletsController@destroy')->name('outlet.destroy');
        //paket
        Route::resource('/paket','PaketController');
        Route::post('paket/update/{id}','PaketController@update')->name('paket.update');
        route::get('/paket/destroy/{id}','PaketController@destroy')->name('paket.destroy');
        route::get('/paket/data/{id?}','PaketController@paket')->name('paket.data');
        //Setatus pesanan
        Route::resource('/spesanan','SpesananController');
        //Transaksi
        Route::resource('/transaksi','TransaksiController');
        Route::post('transaksi/update/{id}','TransaksiController@update')->name('transaksi.update');
        route::get('/transaksi/destroy/{id}','TransaksiController@destroy')->name('transaksi.destroy');
        //laporan
        Route::resource('/laporan','LaporanController');
        Route::get('laporan/cari','LaporanController@cari')->name('laporan.cari');
        Route::get('laporan/print', 'LaporanController@print')->name('laporan.print');
        //user
        Route::resource('/user','UserController');
        Route::post('user/update/{id}','UserController@update')->name('user.update');
        route::get('/user/destroy/{id}','UserController@destroy')->name('user.destroy');

    });
    route::group(['middleware' => ['role:kasir|admin']],function(){
        //outlet
        Route::resource('/outlet','OutletsController');
        Route::post('outlet/update/{id}','OutletsController@update')->name('outlet.update');
        route::get('/outlet/destroy/{id}','OutletsController@destroy')->name('outlet.destroy');
        //paket
        Route::resource('/paket','PaketController');
        Route::post('paket/update/{id}','PaketController@update')->name('paket.update');
        route::get('/paket/destroy/{id}','PaketController@destroy')->name('paket.destroy');
        route::get('/paket/data/{id?}','PaketController@paket')->name('paket.data');
       //Transaksi
       Route::resource('/transaksi','TransaksiController');
       Route::post('transaksi/update/{id}','TransaksiController@update')->name('transaksi.update');
       route::get('/transaksi/destroy/{id}','TransaksiController@destroy')->name('transaksi.destroy'); 
    });
    route::group(['middleware' => ['role:outlet|admin|kasir']],function(){
        //Transaksi
        Route::resource('/transaksi','TransaksiController');
        Route::post('transaksi/update/{id}','TransaksiController@update')->name('transaksi.update');
        route::get('/transaksi/destroy/{id}','TransaksiController@destroy')->name('transaksi.destroy'); 
        //laporan
        Route::resource('/laporan','LaporanController');
    });
});