@extends('admin.layouts.admin-master')
@section('head.title')
Danh sách bài viết
@stop
@section('body.title')
Danh sách bài viết
@stop
@section('body.content')
<form action="{{ route('multi.delete') }}" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="delete">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-font">
			<thead>
				<tr>
					<th style="width:5%"><input type="checkbox" id="CheckAll"></th>
					<th class="text-center">Tiêu đề</th>
					<th style="width:22%">Chuyên mục</th>
					<th style="width:10%">Thời gian</th>
					<th style="width:5%">Sửa</th>
					<th style="width:5%">Xóa</th>
				</tr>
			</thead>
			<tbody>	
				@foreach ($posts as $post)
				<tr>
					<td class="text-center">
						<input type="checkbox" name="CheckID[]" class="checkbox" value="{{ $post->id }}" />
					</td>
					<td class="text-justify"><a href="{{ route('post.show',['cat_slug'=>$post->getCategory->slug,'post-slug'=>$post->slug]) }}">{{ $post->title }}</a></td>
					<td>{{ $post->getCategory->name }}</td>
					<td>{{ $post->created_at->format('d/m/Y') }}</td>
					<td class="text-center"><a href="{{ route('post.edit',['cat_slug'=>$post->getCategory->slug,'post-slug'=>$post->slug]) }}"><i class="fa fa-pencil-square-o text-info"></i></a></td>
					<td class="text-center"><a href="{{ route('post.destroy',['cat_slug'=>$post->getCategory->slug,'post-slug'=>$post->slug]) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
	<button type="submit" class="btn btn-primary">Xóa bài viết đã chọn</button>
	<div class="pagination justify-content-center">
		{!! $posts->links('pagination::bootstrap-4') !!}
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