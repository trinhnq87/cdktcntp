@extends('layouts.master')
@section('head.meta')
<!-- Facebook Meta Tags -->
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:image" content="{{ asset('/') . $post->thumbnail }}" />
@stop
@section('head.title')
{{ $post->title }}
@stop
@section('body.content')
<div class="single-post-wrap">
	<div class="content-wrap text-justify">
		<h3>{{ $post->title }}</h3>
		<div class="post-info">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">				
					<ul class="meta text-muted">
						<i class="fa fa-clock-o" aria-hidden="true">&nbsp;</i>{{ $post->created_at->format('d/m/Y') }}
					</ul>				
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ul class="meta text-right">
					<li><a href="http://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" title="Chia sẻ bài viết lên Facebook" class="share"><span class="fa fa-facebook-official fa-2x text-primary"></span></a>
						<script type="text/javascript" src="./js/facebook-btn.js"></script>
						<li><a href="{{ route('print.preview',$post->slug) }}" target="_blank" title="In trang này"><span class="fa fa-print fa-2x"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="post-content">
			{!! $post->content !!}
		</div>
		@auth
		<div class="navigation-wrap d-flex justify-content-end">
			<a class="edit" href="{{ route('post.edit',['cat_slug'=>$post->getCategory->slug,'post_slug'=>$post->slug]) }}"><i class="fa fa-pencil-square-o"></i> Chỉnh sửa</a>
			<a class="delete" href="{{ route('post.destroy',['cat_slug'=>$post->getCategory->slug,'post_slug'=>$post->slug]) }}"><i class="fa fa-trash-o"></i> Xóa</a>
		</div>
		@endauth
	</div>
</div>
<!-- Bài viết Liên quan -->
<div class="col-md-12 other-post-detail">
	<h4><font color="#B61620">TIN LIÊN QUAN</font></h4>
	<ul>
		@foreach($other_post as $other)
		<li class="other-post-detail-title text-justify">
			<a href="{{ route('post.show',['cat_slug'=>$post->getCategory->slug, 'post_slug'=>$other->slug]) }}"> {{ $other->title }}
			</a>
		</li>
		@endforeach
	</ul>
</div>
<!-- Bài viết Liên quan -->
@stop