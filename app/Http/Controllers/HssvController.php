<?php

namespace App\Http\Controllers;
use App\Hssv;
use Illuminate\Http\Request;
use Auth;
class HssvController extends Controller
{
	public function list(){
		$lop_cntt = Hssv::where('khoa',0)->get();
		$lop_kte = Hssv::where('khoa',1)->get();
		$lop_ddtu = Hssv::where('khoa',2)->get();
		$lop_cntp = Hssv::where('khoa',3)->get();
		return view('hssv',compact('lop_cntt','lop_kte','lop_ddtu','lop_cntp'));
	}
	public function add(){
		return view('admin.hssv.hssv_add');
	}
	public function store(Request $request){		
		$maLop = $request->maLop;	
		if (Hssv::where('ma_lop',$maLop)->exists()){
			return redirect()->route('hssv.add')->withErrors('Mã lớp đã tồn tại.');
		}
		else {
			$khoa = $request->khoa;
			$nganhNghedtao = $request->nganhNghedtao;
			$khoaHoc = $request->khoaHoc;
			$user_id = 	Auth::user()->id;
			$file  = $request->myfile;
			$filename = $file->getClientOriginalName();
			$filename = pathinfo($filename, PATHINFO_FILENAME);
			$filename =  mb_strtoupper(str_slug($filename));
			$filename = $filename . "." . $file->getClientOriginalExtension();
			$file->move('uploads/hssv', $filename);
			$url = '/uploads/hssv/' . $filename;
			Hssv::create([
				'ma_lop'=> $maLop,
				'khoa'=>$khoa,
				'nganh_nghe_dtao' => $nganhNghedtao,
				'khoa_hoc' => $khoaHoc,
				'url'=> $url,
				'user_id'=>$user_id
			]);
			return redirect()->back();
		}
	}
	public function destroy($id){
		$lop = Hssv::where('id',$id)->firstOrFail();
		$lop->delete();
		return redirect()->back();
	}
}
