<?php
namespace App\Http\Controllers;
use DB;
use App\Models\Vande;
use App\Models\Tinhdiem;
use App\Models\Giangvien;
use App\Models\TKB;
use App\Models\Monhoc;
use App\Models\Phieu;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$giangvien = DB::table('thoi_khoa_bieu')->where('ma_sv',Auth::user()->sinhvien_ma)->distinct('ma_gv')
      ->join('giangvien','thoi_khoa_bieu.ma_gv','=', 'giangvien.gv_ma')
      ->select('giangvien.*')->get();
      $sinhvien = TKB::select(["thoi_khoa_bieu.*", DB::raw("COUNT(*) as tatca"),'sinhvien.*',DB::raw("SUM(status) as ok") ])->where('ma_sv', Auth::user()->sinhvien_ma)
                        ->join('sinhvien','sinhvien.sinhvien_ma','=', 'thoi_khoa_bieu.ma_sv')
                ->groupBy('ma_sv')->get();
    	return view('index')->with('giangviens',$giangvien)->with('sinhvien',$sinhvien );
    }
    
   	public function get_index(Request $request){
   		$html= " ";
   		$TKB = DB::table('thoi_khoa_bieu')->where('ma_gv',$request->ma_gv)->where('ma_sv',Auth::user()->sinhvien_ma)
            ->join('monhoc', 'thoi_khoa_bieu.ma_mon', '=', 'monhoc.ma_mon')
            ->select('thoi_khoa_bieu.*', 'monhoc.ten_mon')->get();
        foreach($TKB as $items){
   		$html = $html.'<option value=" '. $items->ma_mon . '">'. $items->ten_mon.'</option>';
   		}
   		echo $html;
   	}
   	public function post_index(Request $request)
   	{
   		// $tinhdiem = new Tinhdiem;
   		// if(isset($request->giang_vien)&& isset($request->mon_hoc))
   		// {
   		// 	$tinhdiem->ma_sv = "12134";
   		// 	$tinhdiem->ma_gv = $request->giang_vien;
   		// 	$tinhdiem->
   		// }
   		if($request->giang_vien=="" || $request->mon_hoc==""){
   			return redirect('/')->with('mess','Bạn phải chọn đủ thông tin giảng viên và môn học!!');
   		}
   		else{
        $check = TKB::where('ma_sv',Auth::user()->sinhvien_ma)->where('ma_gv', $request->giang_vien)
        ->where('ma_mon',$request->mon_hoc)->where('status',NULL)->get();
        if($check->count()>0){
     		$giangvien = Giangvien::where('gv_ma', $request->giang_vien)->get();
     		$monhoc = DB::table('monhoc')->where('ma_mon',$request->mon_hoc)->get();
     		$vande = Vande::all();
     		return view('danhgia')->with('vandes', $vande)->with('giangvien',$giangvien)->with('monhocs',$monhoc);
        }
        return redirect('/')->with('mess','Bạn đã đánh giá môn học này rồi!');
   		}
   	}
   	public function get_danhgia(){
 		return redirect('/');
   		
   	}
   	public function post_danhgia(Request $request){
      $check = TKB::where('ma_sv',Auth::user()->sinhvien_ma)->where('ma_gv', $request->giangvien)
      ->where('ma_mon',$request->monhoc)->where('status',NULL)->get();
      if($check->count()>0){
     		$vande = Vande::all();
     		foreach($vande as $items){
     			$TKB= new Tinhdiem;
     			$id_vande = $items->vande_id;
          $id_tieuchi = $items->tc_id;
     			if($request->$id_vande==NULL){
     				return redirect('/')->with('mess','Phải đánh giá đủ thông tin !');
     			}
     			$TKB->ma_sv = Auth::user()->sinhvien_ma;
     			$TKB->ma_gv = $request->giangvien;
     			$TKB->ma_vande = $items->vande_id;
          $TKB->ma_mon = $request->monhoc;
     			$TKB->diem = $request->$id_vande;
          $TKB->ma_tieuchi = $id_tieuchi;
     			$TKB->save();

       	}
        $phieu = new Phieu;
        $phieu->ma_sv = Auth::user()->sinhvien_ma;
        $phieu->ma_gv = $request->giangvien;
        $phieu->ma_mon = $request->monhoc;
        $phieu->save();

      TKB::where('ma_sv',Auth::user()->sinhvien_ma)->where('ma_gv', $request->giangvien)
      ->where('ma_mon',$request->monhoc)->update(array('status'=> 1 ));
       		return redirect('/')->with('mess','Đánh giá thành công!');
      }return redirect('/')->with('mess','Không thành công!');
   	}
   	public function get_dangnhap(){
   		return view('dangnhap');
   	}
    public function post_dangnhap(Request $request){
      $dangnhap = ['sinhvien_ma' => $request->ma_sv, 'password' =>$request->password ];
      if(Auth::attempt($dangnhap)){
        return redirect('/');
      }
      else{
        return redirect('/dangnhap')->with('mess','Bạn đăng nhập sai tài khoản hoặc mật khẩu!');
      }
    }

    public function dangxuat(){
      Auth::logout();
      return redirect('/dangnhap');
    }

}
