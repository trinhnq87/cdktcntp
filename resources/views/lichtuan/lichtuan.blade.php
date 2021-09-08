@extends('layouts.master')
@section('head.title')
Lịch công tác tuần
@stop
@section('head.css')
<link rel="stylesheet" type="text/css" href="./css/lichtuan.css" />
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<ul class="list-unstyled">
		@foreach ($lichs as $lich)
		<li>
			<div class="lichtuan_box sb"><a href="{{ route('lich.show',$lich->slug) }}">{{ $lich->title }}</a></div>
		</li>
		@endforeach
	</ul>
</div>
<!-- End latest-post Area -->
@stop