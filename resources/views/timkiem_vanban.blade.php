@extends('layouts.master')
@section('head.title')
Kết quả tìm kiếm
@stop
@section('head.css')
<link rel="stylesheet" type="text/css" href="./css/vanban.css" />
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Tìm kiếm</h1>
	<div class="text-danger">Có <font style="font-weight: bold; font-size: 16px">{{ $vanbans->total() }}</font> kết quả tìm kiếm với từ khóa <font style="font-weight: bold; font-size: 16px">{{ $search }}</font>.</div>
	<hr/>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<tbody id="myTable">
				@foreach ($vanbans as $vanban)									
				<tr>
					<td class="text-justify">
						<span class="thong-tin"><a href="{{ $vanban->url }}" target="_blank">{{ $vanban->name }}</a></span><br/>
						<span class="thong-tin">Số văn bản: </span>{{ $vanban->sovb }}<br/>
						<span class="thong-tin">Ngày ban hành: </span>{{ \Carbon\Carbon::parse($vanban->ngay_ban_hanh)->format('d/m/Y') }}<br/>
						<span class="thong-tin">File đính kèm: </span><a href="{{ $vanban->url }}" target="_blank"><i class="fa fa-download"></i> Tải tập tin</a>
						<div class="navigation-wrap">
							<a class="edit" href="{{ route('vanban.edit',$vanban->slug) }}"><i class="fa fa-pencil-square-o"></i> Chỉnh sửa</a>
							<a class="delete" href="{{ route('vanban.destroy',$vanban->id) }}"><i class="fa fa-trash-o"></i> Xóa</a></div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="phan-trang">
			{{ $vanbans->links("pagination::bootstrap-4") }}
		</div>
	</div>
	<!-- End latest-post Area -->
	@stop