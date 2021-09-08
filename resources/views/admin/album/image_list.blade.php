@extends('admin.layouts.admin-master')
@section('head.title')
Danh sách ảnh trong album {{ $album->name }}
@stop
@section('body.title')
Danh sách ảnh trong album {{ $album->name }}
@stop
@section('body.content')
<h6 class="text-right"><a href="{{ route('image.add') }}">Thêm ảnh mới</a></h6>
<div class="table-responsive">
	<table class="table table-bordered table-hover table-font">
		<thead>
			<tr>
				<th style="width:5%">STT</th>
				<th>Tên ảnh</th>
				<th style="width:5%">Xóa</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i =  1;
			@endphp
			@foreach ($images as $image)
			<tr>
				<td class="text-center">
					{{ $i }}
				</td>
				<td class="text-justify"><a href="{{ $image->image_url }}" target="_blank"><img src="{{ $image->image_url }}" width=160px height=90px>  {{ $image->image_name }}</a></td>
				<td class="text-center">
					<a href="{{ route('image.destroy',$image->id) }}"><i class="fa fa-trash-o text-danger"></i></a>
				</td>
			</tr>
			@php
			$i++;
			@endphp
			@endforeach
		</tbody>
	</table>
</div>
{!! $images->links('pagination::bootstrap-4') !!}
@stop