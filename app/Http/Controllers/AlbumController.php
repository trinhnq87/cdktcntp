<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\DBimage;
class AlbumController extends Controller
{
	public function list(){
		$albums = Album::orderBy('id','desc')->paginate(20);
		return view('album.album',compact('albums'));
	}
	public function show($album_slug){
		$album = Album::where('slug',$album_slug)->firstOrFail();
		$images = DBimage::where('album_id',$album->id)->paginate(20);
		return view('album.album_chi_tiet',compact('album','images'));
	}
	public function create(){
		return view('admin.album.album_create');
	}
	public function store(Request $request){
		$name = $request->name;
		$slug = str_slug($name);
		$album_thumb = $request->thumbnail;
		if (Album::where('slug',$slug)->exists()){
			return redirect()->route('album.create')->withErrors('Tên album đã tồn tại.');
		} 
		else {			
			Album::create([
				'name' => $name,
				'slug' => $slug,
				'album_thumb'=> $album_thumb
			]);
			return redirect()->route('album.all');
		}
	}
	public function edit($album_slug){
		$album = Album::where('slug',$album_slug)->firstOrFail();
		return view('admin.album.album_edit',compact('album'));
	}
	public function update(Request $request, $album_slug){
		$album = Album::where('slug',$album_slug)->firstOrFail();
		$name     = $request->name;
		$slug      = str_slug($name);
		$album_thumb = $request->thumbnail;
		if (Album::where('slug',$slug)->exists()) {
			return redirect()->route('album.edit',$album_slug)->withErrors('Tên album đã tồn tại.');
		} else {
			$album ->update([
				'name'       =>$name,
				'slug'        =>$slug,
				'album_thumb'=> $album_thumb
			]);		
			return redirect()->route('album.all');
		}		
	}
	public function destroy($album_slug){
		$album = Album::where('slug',$album_slug)->firstOrFail();
		$album->delete();
		return redirect()->route('album.all');
	}
	//Xử lý ảnh trong Album
	public function all(){
		$albums = Album::orderBy('id','desc')->paginate(20);
		return view('admin.album.album_list',compact('albums'));
	}
	public function add(){
		$albums = Album::orderBy('id','desc')->get();
		return view('admin.album.image_add',compact('albums'));
	}
	public function image_store(Request $request){
		$album_id = $request->album_id;
		$urls = $request->urls;
		$urls  =  explode("\r\n", $urls);
		foreach ($urls as $url) {
			$path_parts = pathinfo($url);
			$image_name = $path_parts['basename'];
			DBimage::create([
				'album_id'	=> $album_id,
				'image_name' => $image_name,
				'image_url' => $url
			]);
		}
		return redirect()->route('image.add')->with('status', 'Thêm ảnh thành  công.');
	}
	public function list_img($album_slug){
		$album = Album::where('slug',$album_slug)->firstOrFail();
		$images = DBimage::where('album_id',$album->id)->paginate(20);
		return view('admin.album.image_list',compact('album','images'));
	}
	public function destroy_image($image_id){
		$image = DBimage::where('id',$image_id)->firstOrFail();
		$image->delete();
		return redirect()->route('image.list',$image->getAlbum->slug);
	}
}
