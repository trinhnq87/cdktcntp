@extends('layouts.master')
@section('head.title')
{{ $baiviet->title }}
@stop
@section('body.content')
<div class="single-post-wrap">
	<div class="content-wrap text-justify">
		<h3>{{ $baiviet->title }}</h3>
		<ul class="meta">
			<li><span class="lnr lnr-calendar-full"></span>{{ $baiviet->created_at->format('d-m-Y') }}</a></li>
		</ul>
		<div class="post-content">
			{!! $baiviet->content !!}
		</div>
		@auth
		<div class="navigation-wrap d-flex justify-content-end">
			<a class="edit" href="{{ route('gioithieu.edit',$baiviet->slug) }}"><i class="fa fa-pencil-square-o"></i> Chỉnh sửa</a>
			<a class="delete" href="{{ route('gioithieu.destroy',$baiviet->slug) }}"><i class="fa fa-trash-o"></i> Xóa</a>
		</div>
		@endauth
	</div>
</div>
<!-- Bài viết Liên quan -->
<div class="col-md-12 other-post-detail">
	<h4><font color="#B61620">CÓ THỂ BẠN QUAN TÂM</font></h4>
	<ul>
		@foreach($baiviet_khac as $bv_khac)
		<li class="other-post-detail-title text-justify">
			<a href="{{ route('gioithieu.show',$bv_khac->slug) }}"> {{ $bv_khac->title }}
			</a>
		</li>
		@endforeach
	</ul>
</div>
<!-- Bài viết Liên quan -->
@stop
@section('footer.sms')
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55158c5a0ae161d3"></script> 
@stop