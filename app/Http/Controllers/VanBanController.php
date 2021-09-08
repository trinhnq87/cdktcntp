<?php

namespace App\Http\Controllers;
use App\VanBan;
use Illuminate\Http\Request;

class VanBanController extends Controller
{
	public function list(){
		$vanbans = VanBan::orderBy('id','desc')->paginate(5);
		return view('vanban',compact('vanbans'));
	}
	public function add(){
		return view('admin.vanban.vanban_add');
	}
	public function store(Request $request){		
		$tenVanban = $request->tenVanban;
		$limit_name = $this->limitText($tenVanban,150);
		$slug = str_slug($tenVanban);		
		if (VanBan::where('slug',$slug)->exists()){
			return redirect()->route('vanban.add')->withErrors('Tên văn bản đã tồn tại.');
		}
		else {
			$soVanban = $request->soVanban;
			$urlVanban = $request->urlVanban;
			$ngayBanHanh = $request->ngayBanHanh;
			VanBan::create([
				'sovb'=> $soVanban,
				'name' => $tenVanban,
				'limit_name' => $limit_name,
				'slug' => $slug,
				'url'=> $urlVanban,
				'ngay_ban_hanh'=>$ngayBanHanh
			]);
			return redirect()->back();
		}
	}
	public function edit($vanban_slug){
		$vanban = VanBan::where('slug',$vanban_slug)->firstOrFail();
		return view('admin.vanban.vanban_edit',compact('vanban'));
	}
	public function update(Request $request, $vanban_slug){
		$vanban = VanBan::where('slug',$vanban_slug)->firstOrFail();
		$tenVanban = $request->tenVanban;
		$limit_name = $this->limitText($tenVanban,150);
		$slug      = str_slug($tenVanban);
		$soVanban = $request->soVanban;
		$urlVanban = $request->urlVanban;
		$ngayBanHanh  = $request->ngayBanHanh;
		$vanban ->update([
			'sovb'=> $soVanban,
			'name' => $tenVanban,			
			'limit_name' => $limit_name,
			'slug' => $slug,
			'url'=> $urlVanban,
			'ngay_ban_hanh'=>$ngayBanHanh
		]);		
		return redirect()->route('vanban');
	}
	public function destroy($vanban_id){
		$vanban = VanBan::where('id',$vanban_id)->firstOrFail();
		$vanban->delete();
		return redirect()->route('vanban');
	}
	public function timKiem(Request $request){
		$search = $request->search;
		$vanbans   = VanBan::where('name','like','%' . $search . '%')
		->orWhere('sovb','like','%' . $search . '%')->paginate(8);
		//Giúp ta chuyển trang page sẽ đính kèm theo từ khóa search của người dùng
		//searchBox là tên Input nhập từ khóa
		$vanbans->appends(['search' => $search]);
		return view('timkiem_vanban',compact('vanbans','search'));
	}
	function limitText($text, $length) {
		$length = abs((int)$length);
		if(strlen($text) > $length) {
			$text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
		}
		return($text);
	}
}
