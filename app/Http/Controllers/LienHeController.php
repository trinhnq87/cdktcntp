<?php

namespace App\Http\Controllers;
use App\LienHe;
use Illuminate\Http\Request;

class LienHeController extends Controller
{    
	public function lien_he(){
		return view('lien_he');
	}
	public function all(){
		$lienhes = LienHe::orderBy('id','desc')->paginate(3);
		return view('admin.lien_he_all',compact('lienhes'));
	}
	public function store(Request $request){
		$hovaten = $request->hovaten;
		$sdt = $request->dienthoai;
		$noidung = $request->tinNhan;
		$user_id = 1;
		$request->session()->flash('status', 'Gửi tin nhắn thành công!');
		LienHe::create([
			'ho_va_ten' => $hovaten,
			'sdt' => $sdt,
			'noi_dung'=> $noidung,
			'user_id'=> $user_id
		]);
		return redirect()->route('lien_he');
	}
	public function destroy($id){
		$lienhe = LienHe::where('id',$id)->firstOrFail();
		$lienhe->delete();
		return redirect()->route('lien_he.all');
	}
}
