<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use App\Category;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{
	public function show($cat_slug,$post_slug){
		$post = Post::where('slug',$post_slug)->firstOrFail();
		$other_post = Post::where('category_id',$post->getCategory->id)->where('slug','!=',$post_slug)->orderBy('id','desc')->take(5)->get();
		return view('post',compact('post','other_post'));
	}
	public function create(){
		$category = Category::all();
		return view('admin.posts.create',compact('category'));
	}
	function limitText($text, $length) {
		$length = abs((int)$length);
		if(strlen($text) > $length) {
			$text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
		}
		return($text);
	}
	public function store(PostRequest $request){
		if (isset($request->date)) {
			$date = $request->date;
			$date = date('Y-m-d H:i:s', strtotime($date));
		} else 
		{
			$date = now();
		}
		$title     = $request->title;
		$slug      = str_slug($title)."-".strtotime(now());
		$cat_id    = $request->category;
		$group     = isset($request->group) ? 2:1;
		$thumbnail = $request->thumbnail;
		$thumbnail_name = basename($thumbnail);
		//thay dấu %20 (dấu cách) trong tên ảnh = dấu _
		$thumbnail_name = str_replace("%20", "_", $thumbnail_name);
		//asset('/') lấy domain của website
		$thumbnail_resize = Image::make(asset('/').$thumbnail);
		$thumbnail_resize->fit(330, 166);
		$thumbnail_resize->save(public_path('uploads/images/thumbnail_resize/'. $thumbnail_name));
		$thumbnail = 'uploads/images/thumbnail_resize/' . $thumbnail_name;
		$introtext = $request->introtext;
		$introtext = $this->limitText($introtext,150);
		$content   = $request->content;		
		$user_id   = Auth::user()->id;
		$views = rand(10,100);
		$post = Post::create([
			'title'       =>$title,
			'slug'        =>$slug,
			'introtext'   => $introtext,
			'thumbnail'   => $thumbnail,
			'content'     => $content,
			'views'       =>$views,
			'category_id' =>$cat_id,			
			'user_id'     =>$user_id,
			'group'       =>$group,			
			'created_at'=>$date
		]);
		$cat_slug = Category::findOrFail($cat_id)->slug;
		return redirect()->route('category.show',compact('cat_slug'));
	}
	public function list(){
		$posts = Post::orderBy('id','desc')->paginate(5);
		return view('admin.posts.post_list',compact('posts'));
	}
	public function edit($cat_slug,$post_slug)
	{
		$post = Post::where('slug',$post_slug)->firstOrFail();
		$category = Category::where('slug',$cat_slug)->firstOrFail();
		$all_cat = Category::all();
		return view('admin.posts.edit',compact('post','category','all_cat'));
	}
	public function update(PostRequest $request, $cat_slug, $post_slug)
	{
		if (isset($request->date)) {
			$date = $request->date;
			$date = date('Y-m-d H:i:s', strtotime($date));
		} else 
		{
			$date = now();
		}
		$post = Post::where('slug',$post_slug)->firstOrFail();
		$title     = $request->title;
		$slug      = str_slug($title)."-".strtotime(now());
		$cat_id    = $request->category;
		$group     = isset($request->group) ? 2:1;
		$thumbnail = $request->thumbnail;
		$thumbnail_name = basename($thumbnail);
		//thay dấu %20 (dấu cách) trong tên ảnh = dấu _
		$thumbnail_name = str_replace("%20", "_", $thumbnail_name);
		//asset('/') lấy domain của website
		$thumbnail_resize = Image::make(asset('/').$thumbnail);
		$thumbnail_resize->fit(330, 166);
		$thumbnail_resize->save(public_path('uploads/images/thumbnail_resize/'. $thumbnail_name));
		$thumbnail = 'uploads/images/thumbnail_resize/' . $thumbnail_name;
		$introtext = $request->introtext;
		$introtext = $this->limitText($introtext,150);
		$content   = $request->content;
		$user_id   = Auth::user()->id;
		$post ->update([
			'title'       =>$title,
			'slug'        =>$slug,
			'introtext'   => $introtext,
			'thumbnail'   => $thumbnail,
			'content'     => $content,
			'category_id' =>$cat_id,			
			'user_id'     =>$user_id,
			'group'       =>$group,
			'created_at'=>$date
		]);
		return redirect()->route('category.show',compact('cat_slug'));
	}
	public function destroy($cat_slug, $post_slug)
	{
		$post = Post::where('slug',$post_slug)->firstOrFail();
		$post->delete();
		session()->flash('status', 'Xóa bài viết thành công!');
		return redirect()->back();
	}
	public function multiDelete(Request $request){
		Post::whereIn('id', $request->input('CheckID'))->delete();
		session()->flash('status', 'Xóa bài viết thành công!');
		return redirect()->back();
	}
}
