<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GioiThieu;
class GioiThieuController extends Controller
{
	public function list(){
		$baiviets = GioiThieu::orderBy('id','desc')->get();
		return view('admin.gioithieu.ds_baiviet',compact('baiviets'));
	}
	public function show($baiviet_slug){
		$baiviet = GioiThieu::where('slug',$baiviet_slug)->firstOrFail();
		$baiviet_khac = GioiThieu::where('id','!=',$baiviet->id)->orderBy('id','desc')->get();
		return view('baiviet_gioithieu',compact('baiviet','baiviet_khac'));
	}
	public function create(){
		return view('admin.gioithieu.them_baiviet');
	}
	public function store(Request $request){
		$title = $request->title;
		$slug = str_slug($title);
		if (GioiThieu::where('slug',$slug)->exists()){
			return redirect()->route('gioithieu.edit',compact('slug'))->withErrors('Tiêu đề bài giới thiệu đã tồn tại.');
		} 
		else {
			$content = $request->content;
			GioiThieu::create([
				'title' => $title,
				'slug' => $slug,
				'content'=> $content
			]);
			return redirect()->route('gioithieu.list');
		}
	}
	public function edit($baiviet_slug){
		$baiviet = GioiThieu::where('slug',$baiviet_slug)->firstOrFail();
		return view('admin.gioithieu.sua_baiviet',compact('baiviet'));
	}
	public function update(Request $request, $baiviet_slug){
		$baiviet = GioiThieu::where('slug',$baiviet_slug)->firstOrFail();
		$title     = $request->title;
		$slug      = str_slug($title);
		$content   = $request->content;
		$baiviet ->update([
			'title'       =>$title,
			'slug'        =>$slug,
			'content'     => $content
		]);		
		return redirect()->route('gioithieu.list');
	}
	public function destroy($baiviet_slug){
		$baiviet = GioiThieu::where('slug',$baiviet_slug)->firstOrFail();
		$baiviet->delete();
		return redirect()->route('gioithieu.list');
	}
}
