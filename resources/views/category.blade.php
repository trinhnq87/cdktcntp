@extends('layouts.master')
@section('head.title')
{{ $oneCat->name }}
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<div class="category-title">
		<span class="cat-title"><font color="#267DBB"> {{ $oneCat->name }} </font></span>
	</div>
	@foreach ($posts as $post)
	<div class="single-latest-post row">
		<div class="col-lg-4 post-left">			
			<a href="{{ route('post.show',['cat_slug'=>$post->getCategory->slug,'post_slug'=>$post->slug]) }}">
				<div class="feature-img relative">
					<img class="post-thumb" src="{{ $post->thumbnail }}" alt="">
				</div>
			</div>
			<div class="col-lg-8 post-right text-justify">
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