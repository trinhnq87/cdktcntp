<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function show($cat_slug){
		$oneCat = Category::where('slug',$cat_slug)->firstOrFail();
		$posts = Post::where('category_id',$oneCat->id)->orderBy('id','desc')->paginate(10);
		return view('category',compact('oneCat','posts'));
	}
	public function list(){
		$category = Category::all();
		return view('admin.category.cat_list',compact('category'));
	}
	public function store(Request $request){
		$cat_name = $request->cat_name;
		$slug = str_slug($cat_name);
		if (Category::where('slug',$slug)->exists()){
			return redirect()->route('category.list')->withErrors('Tên chuyên mục đã tồn tại.');
		} 
		else {
			Category::create([
				'name' => $cat_name,
				'slug' => $slug
			]);
			return redirect()->route('category.list');
		}
	}
}
