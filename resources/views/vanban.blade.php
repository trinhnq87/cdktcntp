@extends('layouts.master')
@section('head.title')
Văn bản
@stop
@section('head.css')
<link rel="stylesheet" type="text/css" href="./css/vanban.css" />
@stop
@section('body.content')
<div class="latest-post-wrap">
	<div class="col-lg-6 offset-lg-6 pt-2 pr-0">
		<form class="example" method="get" action="{{ route('vanban.timkiem') }}">
			<input type="text" placeholder="Nhập tên hoặc số văn bản cần tìm..." name="search" required>
			<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
	</div>
	<br/><br/>
	<hr/>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<tbody id="myTable">
				@foreach ($vanbans as $vanban)									
				<tr>
					<td>
						<span class="thong-tin text-justify"><a href="{{ $vanban->url }}" target="_blank">{{ $vanban->name }}</a></span><br/>
						<span class="thong-tin">Số văn bản: </span>{{ $vanban->sovb }}<br/>
						<span class="thong-tin">Ngày ban hành: </span>{{ \Carbon\Carbon::parse($vanban->ngay_ban_hanh)->format('d/m/Y') }}<br/>
						<span class="thong-tin">File đính kèm: </span><a href="{{ $vanban->url }}" target="_blank"><i class="fa fa-download"></i> Tải tập tin</a>
						@auth
						<div class="navigation-wrap">
							<a class="edit" href="{{ route('vanban.edit',$vanban->slug) }}"><i class="fa fa-pencil-square-o"></i> Chỉnh sửa</a>
							<a class="delete" href="{{ route('vanban.destroy',$vanban->id) }}"><i class="fa fa-trash-o"></i> Xóa</a>
						</div>
						@endauth
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
@stop