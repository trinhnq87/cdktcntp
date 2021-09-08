@extends('layouts.master')
@section('head.title')
{{ $album->name }}
@stop
@section('body.content')
<div class="latest-post-wrap">
	<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">{{ $album->name }}</h1>
	<hr class="mt-2 mb-5">
	<div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
		@php
		$i  = 0;
		@endphp
		@foreach  ($images as $image)
		<div class="col-lg-3 col-md-4 col-6 mb-2">
			<img class="img-fluid img-thumbnail" src="{{ $image->image_url }}" alt="" data-target="#carouselExample" data-slide-to="{{ $i }}">
		</div>
		@php
		$i++;
		@endphp
		@endforeach
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body"><!-- Carousel markup goes in the modal body -->
					<div id="carouselExample" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">						
							@php
							$j = 0;
							@endphp
							@foreach ($images as $image)
							@php
							if ($j == 0) {
							$addActive = "active";
						} 
						else {
						$addActive = "";
					}
					@endphp
					<div class="carousel-item text-center {{ $addActive }}">
						<img class="img-fluid" src="{{ $image->image_url }}">
					</div>
					@php
					$j++;
					@endphp
					@endforeach
				</div>
				<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
<div class="phan-trang">
	{{ $images->links("pagination::bootstrap-4") }}
</div>
</div>
@stop