@extends('admin.layouts.admin-master')
@section('head.title')
Danh sách lịch công tác
@stop
@section('body.title')
Danh sách lịch công tác
@stop
@section('body.content')
<form action="{{ route('multi.delete_lichtuan') }}" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="delete">
	<h6 class="text-right"><a href="{{ route('lichtuan.create') }}">Thêm lịch tuần mới</a></h6>
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
				@foreach ($lichs as $lich)
				<tr>
					<td class="text-center">
						<input type="checkbox" name="CheckID[]" class="checkbox" value="{{ $lich->id }}" />
					</td>
					<td class="text-justify"><a href="{{ route('lich.show',$lich->slug) }}">{{ $lich->title }}</a></td>
					<td>{{ $lich->created_at->format('d/m/Y') }}</td>
					<td class="text-center"><a href="{{ route('lichtuan.edit',$lich->slug) }}"><i class="fa fa-pencil-square-o text-info"></i></a></td>
					<td class="text-center"><a href="{{ route('lichtuan.destroy',$lich->slug) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<button type="submit" class="btn btn-primary">Xóa lịch tuần đã chọn</button>
	<div class="pagination justify-content-center">
		{!! $lichs->links('pagination::bootstrap-4') !!}
	</div>
	@if (session('status'))
	<div class="alert alert-success mt-1">{{ session('status') }}</div>
	@endif
</form>
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