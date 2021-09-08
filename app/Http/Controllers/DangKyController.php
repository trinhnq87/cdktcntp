<?php

namespace App\Http\Controllers;
use App\DangKy;
use Illuminate\Http\Request;

class DangKyController extends Controller
{
    public function dang_ky(){
		return view('dang_ky');
	}
	public function store(Request $request){
		$hovaten = $request->hovaten;
		$sdt = $request->dienthoai;
		$ngaysinh = $request->ngaysinh;
		$diachi = $request->diachi;
		$truong = $request->truong;
		$tongket = $request->tongket;
		$nganh_nghe = $request->nganh_nghe;
		$request->session()->flash('status', 'Gửi đăng ký thành công!');
		DangKy::create([
			'ho_va_ten' => $hovaten,
			'sdt' => $sdt,
			'ngay_sinh'=> $ngaysinh,
			'dia_chi'=> $diachi,
			'truong'=>$truong,
			'tong_ket'=>$tongket,
			'nganh_nghe'=>$nganh_nghe
		]);
		return redirect()->route('dang_ky');
	}
	public function all(){
		$dangkys = DangKy::orderBy('id','desc')->paginate(5);
		return view('admin.dang_ky_all',compact('dangkys'));
	}
	public function destroy($id){
		$dangky = DangKy::where('id',$id)->firstOrFail();
		$dangky->delete();
		return redirect()->route('dang_ky.all');
	}
}
