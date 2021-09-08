<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BieuMau;
class BieuMauController extends Controller
{
	public function list(){
		$bieumau_gv = BieuMau::where('group','Giành cho Giáo viên, CBCNV')->get();
		$bieumau_hssv = BieuMau::where('group','Giành cho Học sinh, Sinh viên')->get();
		return view('bieumau',compact('bieumau_gv','bieumau_hssv'));
	}
	public function add(){
		return view('admin.bieumau.bieumau_add');
	}
	public function store(Request $request){		
		$tenBieumau = $request->tenBieumau;
		$slug = str_slug($tenBieumau);		
		if (BieuMau::where('slug',$slug)->exists()){
			return redirect()->route('bieumau.add')->withErrors('Tên biểu mẫu đã tồn tại.');
		}
		else {
			$group = $request->group;
			$urlBieumau = $request->urlBieumau;
			BieuMau::create([
				'name' => $tenBieumau,
				'slug' => $slug,
				'group'=> $group,
				'url'=> $urlBieumau
			]);
			return redirect()->back();
		}
	}
	public function edit($bieumau_slug){
		$bieumau = BieuMau::where('slug',$bieumau_slug)->firstOrFail();
		return view('admin.bieumau.bieumau_edit',compact('bieumau'));
	}
	public function update(Request $request, $bieumau_slug){
		$bieumau = BieuMau::where('slug',$bieumau_slug)->firstOrFail();
		$tenBieumau = $request->tenBieumau;
		$slug = str_slug($tenBieumau);	
		$group = $request->group;
		$urlBieumau = $request->urlBieumau;
		$bieumau ->update([
			'name' => $tenBieumau,
			'slug' => $slug,
			'group'=> $group,
			'url'=> $urlBieumau
		]);		
		return redirect()->route('bieumau');
	}
	public function destroy($bieumau_id){
		$bieumau = BieuMau::where('id',$bieumau_id)->firstOrFail();
		$bieumau->delete();
		return redirect()->route('bieumau');
	}
}
