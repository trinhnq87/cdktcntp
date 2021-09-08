@extends('layouts.print_master')
@section('head.title')
{{ $post->title }}
@stop
@section('body.content')
<div class="single-post-wrap">	
	<div class="header-print mb-2">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-6">
				<img class="img-fluid" src="img/logo.png" alt="">
			</div>
			<div class="col-lg-7 col-md-7 col-sm-6 text-right">
				<a href="javascript:void(0);" onClick="window.print()" class="d-print-none">
					<font style="color:blue">In trang này</font>
				</a>
			</div>
		</div>
	</div>
	<div class="post-content text-justify">
		<h3>{{ $post->title }}</h3>
		<ul class="meta">
			<li>{{ $post->created_at->format('d-m-Y') }}</li>
		</ul>
		<div class="post-content">
			{!! $post->content !!}
		</div>
	</div>
</div>
@stop