<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichTuan;
use App\Http\Requests\LichTuanRequest;
class LichTuanController extends Controller
{
	public function list(){
		$lichs = LichTuan::orderBy('id','desc')->get();
		return view('lichtuan.lichtuan',compact('lichs'));
	}
	public function show($lich_slug){
		$lich = LichTuan::where('slug',$lich_slug)->firstOrFail();
		$lichCu = LichTuan::where('id','<',$lich->id)->orderBy('id','desc')->take(3)->get();
		$lichMoi = LichTuan::where('id','>',$lich->id)->orderBy('id','desc')->take(3)->get();
		return view('lichtuan.lich_chi_tiet',compact('lich','lichCu','lichMoi'));
	}
	public function create(){
		return view('admin.lichtuan.them_lich');
	}
	public function store(LichTuanRequest $request){
		$title = $request->title;
		$slug = str_slug($title);
		if (LichTuan::where('slug',$slug)->exists()){
			return redirect()->route('lichtuan.edit',compact('slug'))->withErrors('Tiêu đề lịch công tác đã tồn tại.');
		} 
		else {
			$content = $request->content;
			$user_id = 1;
			LichTuan::create([
				'title' => $title,
				'slug' => $slug,
				'content'=> $content,
				'user_id'=> $user_id
			]);
			return redirect()->route('lichtuan');
		}
	}
	public function edit($lich_slug){
		$lich = LichTuan::where('slug',$lich_slug)->firstOrFail();
		return view('admin.lichtuan.edit',compact('lich'));
	}
	public function update(LichTuanRequest $request, $lich_slug){
		$lich = LichTuan::where('slug',$lich_slug)->firstOrFail();
		$title     = $request->title;
		$slug      = str_slug($title);
		$content   = $request->content;
		$user_id = 1;
		$lich ->update([
			'title'       =>$title,
			'slug'        =>$slug,
			'content'     => $content,		
			'user_id'     =>$user_id
		]);		
		return redirect()->route('lich.show',compact('slug'));
	}
	public function all(){
		$lichs = LichTuan::orderBy('id','desc')->paginate(5);
		return view('admin.lichtuan.danh_sach_lich',compact('lichs'));
	}
	public function destroy($lich_slug){
		$lich = LichTuan::where('slug',$lich_slug)->firstOrFail();
		$lich->delete();
		session()->flash('status', 'Xóa lịch tuần thành công!');
		return redirect()->back();
	}
	public function multiDelete(Request $request){
		LichTuan::whereIn('id', $request->input('CheckID'))->delete();
		session()->flash('status', 'Xóa lịch tuần thành công!');
		return redirect()->back();
	}
}
