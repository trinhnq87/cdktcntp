<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PrintController extends Controller
{
    public function printPreview($post_slug){
    	$post = Post::where('slug',$post_slug)->firstOrFail();
    	return view('print_post',compact('post'));
    }
}
