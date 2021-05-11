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
use Auth;
class AdminController extends Controller
{
    public function index(){
    	$gv = Tinhdiem::select("danhgia.*", DB::raw("AVG(diem) as diemTB"),'giangvien.gv_ten')
      ->join('giangvien','danhgia.ma_gv','=', 'giangvien.gv_ma')
      ->groupBy('ma_gv')->orderBy('diemTB','desc')->get();
        $tkb = TKB::groupBy('ma_gv','ma_mon')->join('monhoc','thoi_khoa_bieu.ma_mon','=','monhoc.ma_mon')->select('thoi_khoa_bieu.*','monhoc.ten_mon')->get();
        $phieu = Phieu::all();
    	return view('admin.giangvien')->with('giangviens',$gv)->with('tkbs',$tkb)->with('phieus',$phieu);
    }
    public function chitiet($id){
      $gv = Tinhdiem::select("danhgia.*", DB::raw("AVG(diem) as diemTB"),'tieuchi.*','giangvien.gv_ten')->where('ma_gv',$id)
      ->join('tieuchi','tieuchi.tieuchi_id','=', 'danhgia.ma_tieuchi')->join('giangvien','giangvien.gv_ma','=', 'danhgia.ma_gv')
      ->groupBy('ma_tieuchi')->orderBy('diemTB','desc')->get();
       return view('admin.danhgia_chitiet')->with('gv', $gv);
    }
    public function dg_monhoc(){
    	$monhoc = Tinhdiem::select("danhgia.*", DB::raw("AVG(diem) as diemTB"),'monhoc.ten_mon')
                        ->join('monhoc','monhoc.ma_mon','=', 'danhgia.ma_mon')
      					->groupBy('ma_mon')->orderBy('diemTB','desc')->get();
      	$tkb = TKB::groupBy('ma_gv','ma_mon')->join('giangvien','thoi_khoa_bieu.ma_gv','=','giangvien.gv_ma')->select('thoi_khoa_bieu.*','giangvien.gv_ten')->get();
      	$phieu = Phieu::all();
    	return view('admin.monhoc')->with('monhocs', $monhoc)->with('tkbs', $tkb)->with('phieus',$phieu);
    }

    public function login_admin(){
      return view('admin.dangnhap_admin');
    }
    public function postlogin_admin(Request $request){
      $tg = ['account'=> $request->acc, 'password' => $request->password];
      if(Auth::guard('admins')->attempt($tg)){
        return redirect('/admin');
      }
      else return back();
    }
    public function logout_admin(){
      Auth::guard('admins')->logout();
      return redirect('admin/dangnhap');
    }
    public function quanlysinhvien(Request $request){
      if(!isset($request->loc)){
      $sinhvien = TKB::select(["thoi_khoa_bieu.*", DB::raw("COUNT(*) as tatca"),'sinhvien.*',DB::raw("SUM(status) as ok") ])
                        ->join('sinhvien','sinhvien.sinhvien_ma','=', 'thoi_khoa_bieu.ma_sv')
                ->groupBy('ma_sv')->get();

      return view('admin.lq_sinhvien')->with('sinhviens', $sinhvien);
    }
    else {
      $sinhvien = TKB::select(["thoi_khoa_bieu.*", DB::raw("COUNT(*) as tatca"),'sinhvien.*',DB::raw("SUM(status) as ok") ])->where('status',null)
                        ->join('sinhvien','sinhvien.sinhvien_ma','=', 'thoi_khoa_bieu.ma_sv')
                ->groupBy('ma_sv')->get();
      
     
      
      return view('admin.lq_sinhvien')->with('sinhviens', $sinhvien);
    }
    }

    public function quanlygiangvien(){
      $giangvien = Giangvien::all();
      return view('admin.ql_giangvien')->with('giangvien',$giangvien);
    }
    public function tieuchi(){
      $tc = Tinhdiem::select("danhgia.*", DB::raw("AVG(diem) as diemTB"),'tieuchi.tieuchi_ten')
      ->join('tieuchi','tieuchi.tieuchi_id','=', 'danhgia.ma_tieuchi')
      ->groupBy('ma_tieuchi')->orderBy('diemTB','desc')->get();
      
      return view('admin.tieuchi')->with('tc', $tc);
    }
    public function vande(){
      $vd = Tinhdiem::select("danhgia.*", DB::raw("AVG(diem) as diemTB"),'vande.vande_noidung')
      ->join('vande','vande.vande_id','=', 'danhgia.ma_vande')
      ->groupBy('ma_vande')->orderBy('diemTB','desc')->get();
      return view('admin.vande')->with('vd',$vd);
    }
}
