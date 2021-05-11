<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/','HomeController@index')->middleware('sinhvien');
Route::get('/load','HomeController@get_index')->middleware('sinhvien');
Route::post('/danhgia','HomeController@post_index')->middleware('sinhvien');
Route::get('/danhgia','HomeController@get_danhgia')->middleware('sinhvien');
Route::post('/done','HomeController@post_danhgia')->middleware('sinhvien');
Route::get('/dangnhap' ,'HomeController@get_dangnhap');
Route::get('/dangxuat' ,'HomeController@dangxuat')->middleware('sinhvien');
Route::post('/dangnhap' ,'HomeController@post_dangnhap');

//admin
Route::get('/admin' ,'AdminController@index')->middleware('admin');
Route::get('/admin{id}' ,'AdminController@chitiet')->middleware('admin');
Route::get('/monhoc' ,'AdminController@dg_monhoc')->middleware('admin');
Route::get('/admin/dangnhap' ,'AdminController@login_admin');
Route::post('/admin/dangnhap' ,'AdminController@postlogin_admin');
Route::get('/admin/dangxuat' ,'AdminController@logout_admin');
Route::get('/quanlysinhvien' ,'AdminController@quanlysinhvien')->middleware('admin');
Route::get('/quanlygiangvien' ,'AdminController@quanlygiangvien')->middleware('admin');
Route::get('/tieuchi' ,'AdminController@tieuchi')->middleware('admin');
Route::get('/vande' ,'AdminController@vande')->middleware('admin');
/////admin-Quản lý

Route::get('/quanlyvande' ,'QuanlyController@vande')->middleware('admin');
Route::get('/themvande' ,'QuanlyController@themvande')->middleware('admin');
Route::post('/themvande' ,'QuanlyController@post_themvande')->middleware('admin');
Route::get('/suavande{id}' ,'QuanlyController@suavande')->middleware('admin');
Route::post('/suavande{id}' ,'QuanlyController@post_suavande')->middleware('admin');
Route::get('/xoavande{id}' ,'QuanlyController@xoavande')->middleware('admin');

Route::get('/quanlytieuchi' ,'QuanlyController@tieuchi')->middleware('admin');
Route::get('/themtieuchi' ,'QuanlyController@themtieuchi')->middleware('admin');
Route::post('/themtieuchi' ,'QuanlyController@post_themtieuchi')->middleware('admin');
Route::get('/suatieuchi{id}' ,'QuanlyController@suatieuchi')->middleware('admin');
Route::post('/suatieuchi{id}' ,'QuanlyController@post_suatieuchi')->middleware('admin');
Route::get('/xoatieuchi{id}' ,'QuanlyController@xoatieuchi')->middleware('admin');