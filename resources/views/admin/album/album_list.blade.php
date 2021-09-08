@extends('admin.layouts.admin-master')
@section('head.title')
Danh sách album ảnh
@stop
@section('body.title')
Danh sách album ảnh
@stop
@section('body.content')
<h6 class="text-right"><a href="{{ route('album.create') }}">Thêm album mới</a></h6>
<div class="table-responsive">
	<table class="table table-bordered table-hover table-font">
		<thead>
			<tr>
				<th style="width:5%">STT</th>
				<th class="text-center">Tên album</th>
				<th style="width:10%">Số ảnh</th>
				<th style="width:5%">Sửa</th>
				<th style="width:5%">Xóa</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i = 1;
			@endphp	
			@foreach ($albums as $album)
			<tr>
				<td class="text-center">
					{{ $i }}
				</td>
				<td class="text-justify"><a href="{{ route('image.list',$album->slug) }}">{{ $album->name }}</a></td>
				<td class="text-center">{{ $album->getImages->count() }}</td>
				<td class="text-center"><a href="{{ route('album.edit',$album->slug) }}"><i class="fa fa-pencil-square-o text-info"></i></a></td>
				<td class="text-center">
@if ($album->getImages->count() == 0)
					<a href="{{ route('album.destroy',$album->slug) }}"><i class="fa fa-trash-o text-danger"></i></a>
@endif
				</td>
			</tr>
			@php
			$i++;
			@endphp
			@endforeach
		</tbody>
	</table>
</div>
{!! $albums->links('pagination::bootstrap-4') !!}
@stop