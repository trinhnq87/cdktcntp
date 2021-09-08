@extends('admin.layouts.admin-master')
@section('head.title')
Danh sách bài viết giới thiệu về trường
@stop
@section('body.title')
Danh sách bài viết giới thiệu về trường
@stop
@section('body.content')
<h6 class="text-right"><a href="{{ route('gioithieu.create') }}">Thêm bài viết mới</a></h6>
<div class="table-responsive">
	<table class="table table-bordered table-hover table-font">
		<thead>
			<tr>
				<th style="width:5%"><input type="checkbox" id="CheckAll"></th>
				<th class="text-center">Tiêu đề</th>
				<th style="width:10%">Thời gian</th>
				<th style="width:5%">Sửa</th>
				<th style="width:5%">Xóa</th>
			</tr>
		</thead>
		<tbody>	
			@foreach ($baiviets as $baiviet)
			<tr>
				<td class="text-center">
					<input type="checkbox" name="CheckID[]" class="checkbox"/>
				</td>
				<td class="text-justify"><a href="{{ route('gioithieu.show',$baiviet->slug) }}">{{ $baiviet->title }}</a></td>
				<td>{{ $baiviet->created_at->format('d/m/Y') }}</td>
				<td class="text-center"><a href="{{ route('gioithieu.edit',$baiviet->slug) }}"><i class="fa fa-pencil-square-o text-info"></i></a></td>
				<td class="text-center"><a href="{{ route('gioithieu.destroy',$baiviet->slug) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
@section('body.js')
<script>
	$(document).ready(function(){
		$('#CheckAll').on('click',function(){
			if(this.checked){
				$('.checkbox').each(function(){
					this.checked = true;
				});
			}else{
				$('.checkbox').each(function(){
					this.checked = false;
				});
			}
		});
		$('.checkbox').on('click',function(){
			if($('.checkbox:checked').length == $('.checkbox').length){
				$('#CheckAll').prop('checked',true);
			}else{
				$('#CheckAll').prop('checked',false);
			}
		});
	});
</script>
@stop