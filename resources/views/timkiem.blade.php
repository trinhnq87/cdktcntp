@extends('layouts.master')
@section('head.title')
Kết quả tìm kiếm
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Tìm kiếm</h1>
	<div class="text-danger">Có <font style="font-weight: bold; font-size: 16px">{{ $posts->total() }}</font> kết quả tìm kiếm với từ khóa <font style="font-weight: bold; font-size: 16px">{{ $tuKhoa }}</font>.</div>
	<hr/>
	@foreach ($posts as $post)
	<div class="single-latest-post row">
		<div class="col-lg-4 post-left">
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<img class="img-fluid" src="{{ $post->thumbnail }}" alt="">
			</div>
		</div>
		<div class="col-lg-8 post-right text-justify">
			<a href="{{ route('post.show',['cat_slug'=>$post->getCategory->slug,'post_slug'=>$post->slug]) }}">
				<h4>{{ $post->title }}</h4>
			</a>
			<p class="excert">
				{{ $post->introtext }}
			</p>
		</div>
	</div>
	@endforeach
	<div class="phan-trang">
		{{ $posts->links("pagination::bootstrap-4") }}
	</div>
</div>
<!-- End latest-post Area -->
@stop