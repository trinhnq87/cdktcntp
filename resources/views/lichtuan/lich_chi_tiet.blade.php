@extends('layouts.master')
@section('head.title')
{{ $lich->title }}
@stop
@section('head.css')
<link rel="stylesheet" type="text/css" href="./css/lichtuan.css" />
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
		<div class="lich_title">{{ $lich->title }}</div>
		<div class="lich_date">
			<i class="fa fa-clock-o" aria-hidden="true">&nbsp;</i>{{ $lich->created_at->format('d/m/Y') }}
		</div>
		<div class="lich_content table-responsive table-hover mt-2">
			{!! $lich->content !!}
		</div>
</div>
<!-- End latest-post Area -->
<!-- Lịch mới hơn -->
@if ($lichMoi->count() > 0)
<div class="col-md-12 other-post-detail">
	<h4><font color="#B61620">LỊCH MỚI HƠN</font></h4>
	<ul>
		@foreach($lichMoi as $lm)
		<li class="other-post-detail-title text-justify">
			<a href="{{ route('lich.show',$lm->slug) }}"> {{ $lm->title }}
			</a>
		</li>
		@endforeach
	</ul>
</div>
@endif
<!-- Lịch mới hơn -->
<!-- Lịch cũ hơn -->
<div class="col-md-12 other-post-detail">
	<h4><font color="#B61620">LỊCH CŨ HƠN</font></h4>
	<ul>
		@foreach($lichCu as $lc)
		<li class="other-post-detail-title text-justify">
			<a href="{{ route('lich.show',$lc->slug) }}"> {{ $lc->title }}
			</a>
		</li>
		@endforeach
	</ul>
</div>
<!-- Lịch cũ hơn -->
@stop