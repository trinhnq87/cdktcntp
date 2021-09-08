@extends('layouts.master')
@section('head.title')
Thư viện ảnh trường Cao đẳng Kinh tế và Công nghệ thực phẩm
@stop
@section('body.content')
<div class="latest-post-wrap">
	<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Danh sách album ảnh</h1>
	<hr class="mt-2 mb-5">
	<div class="row">
		@foreach ($albums as $album)
		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
			<div class="font-weight-bold text-center">
				<a href="{{ route('album.show',$album->slug) }}">
					<img class="img-fluid img-thumbnail" src="{{ asset('/') . $album->album_thumb }}"/>
					{{ $album->name }}
				</a>
			</div>
		</div>
		@endforeach
	</div>
	<div class="phan-trang">
		{{ $albums->links("pagination::bootstrap-4") }}
	</div>
</div>
@stop