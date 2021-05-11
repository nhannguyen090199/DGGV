<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Vande;
use App\Models\Tinhdiem;
use App\Models\Giangvien;
use App\Models\TKB;
use App\Models\Monhoc;
use App\Models\Phieu;
use App\Models\Tieuchi;
use Auth;
class QuanlyController extends Controller
{
   public function vande(){
   	$vande = DB::table('vande')->select('vande.*', 'tieuchi.*')->join('tieuchi','vande.tc_id','=','tieuchi.tieuchi_id')->get();
   	return view('admin.ql_vande')->with('vande', $vande);
   }
   public function themvande(){
   	$tieuchi = DB::table('tieuchi')->get();
   	return view('admin.them_vande')->with('tieuchi', $tieuchi);
   }
   public function post_themvande(Request $request){
   	$vande = new Vande;
   	$vande->vande_noidung = $request->vande;
   	$vande->tc_id = $request->tc;
   	$vande->save();

   	return redirect('/quanlyvande')->with('mess','Đã thêm thành công vấn đề!!');
   }
   public function suavande($id){
   	$vande = Vande::where('vande_id',$id)->get();
   	$tieuchi = DB::table('tieuchi')->get();
   	return view('admin.sua_vande')->with('vande',$vande)->with('tieuchi', $tieuchi);
   }
   public function post_suavande($id, Request $request){
   	Vande::where('vande_id', $id)->update(array('vande_noidung' => $request->vande ,'tc_id'=>$request->tc ));
   	return redirect('/quanlyvande')->with('mess','Sửa vấn đề thành công!');
   }
   public function xoavande($id){
   	Vande::where('vande_id',$id)->delete();
   	return redirect('/quanlyvande')->with('mess','Xóa vấn đề thành công!');
   }

   public function tieuchi(){
   	$tieuchi = Tieuchi::all();
   	return view('admin.ql_tieuchi')->with('tieuchi', $tieuchi);
   }
   public function themtieuchi(){
   	return view('admin.them_tieuchi');
   }
   public function post_themtieuchi(Request $request){
   	$tieuchi = new Tieuchi;
   	$tieuchi->tieuchi_ten = $request->tieuchi;
   	$tieuchi->save();
   	return redirect('/quanlytieuchi')->with('mess','Đã thêm thành công tiêu chí!');
   }

   public function suatieuchi($id){
   	// Tieuchi::where('tieuchi_id',$id)->update(array('tieuchi_ten' => $request->tieuchi ));
   	// return redirect('/quanlytieuchi')->with('mess', 'Sửa thành công tiêu chí!');
   	$tieuchi = Tieuchi::where('tieuchi_id',$id)->get();
   	return view('admin.sua_tieuchi')->with('tieuchi',$tieuchi);
   }
   public function post_suatieuchi($id, Request $request){
   	Tieuchi::where('tieuchi_id',$id)->update(array('tieuchi_ten' => $request->tieuchi ));
   	return redirect('/quanlytieuchi')->with('mess', 'Sửa thành công tiêu chí!');
   }
   public function xoatieuchi($id){
   	Tieuchi::where('tieuchi_id',$id)->delete();
   	return redirect('/quanlytieuchi')->with('mess','Xóa thành công tiêu chí!');
   }
}
