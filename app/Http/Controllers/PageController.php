<?php

namespace App\Http\Controllers;
use App\Post;
use App\VanBan;
use Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home(){
		$vanban = VanBan::orderBy('id','desc')->take(6)->get(); //Lấy 6 văn bản đầu tiên
		return view('homepage',compact('vanban'));
	} 
	public function homepage(){
		return view('admin.homepage');
	}
    public function ping(){
        return view('ping');
    }
	public function login(){
		if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
			return redirect()->route('admin.homepage');
		} else {
			return view('login');
		}
	}
	public function postLogin(Request $request){
		$login = [
			'email' => $request->email,
			'password' => $request->password
		];
		if (Auth::attempt($login)) {
			return redirect()->route('admin.homepage');
		} else {
			return redirect()->route('login')->withErrors('Email hoặc Password không chính xác');
		}
	}
	public function logout()
	{
		Auth::logout();	
		session_start();	
		session_destroy();
		return redirect()->route('homepage');
	}
	public function ban_do(){
		return view('ban_do');
	}
	public function donvi($donvi){
		return view("donvi.".$donvi);
	}
	public function timKiem(Request $request){
		$tuKhoa = $request->tukhoa;
		$posts   = Post::where('title','like','%' . $tuKhoa . '%')
		->orWhere('content','like','%' . $tuKhoa . '%')->paginate(10);
		//Giúp ta chuyển trang page sẽ đính kèm theo từ khóa search của người dùng
		//searchBox là tên Input nhập từ khóa
		$posts->appends(['tukhoa' => $tuKhoa]);
		return view('timkiem',compact('posts','tuKhoa'));
	}
}
