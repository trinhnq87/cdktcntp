@extends('admin.layouts.admin-master')
@section('head.title')
Chỉnh sửa lịch công tác
@stop
@section('head.css')
<script src="./admin_asset/ckeditor/ckeditor.js"></script>
@stop
@section('body.title')
Chỉnh sửa lịch công tác
@stop
@section('body.content')
<form action="{{ route('lichtuan.update',$lich->slug) }}" method="post">
	{{ csrf_field() }}
	@if ($errors->any())
	<div class="alert alert-danger mt-2">
		<ul class="list-unstyled">
			@foreach($errors->all() as $error)
			<li>
				{{ $error }}
			</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="form-group">
		<label for="title">Tiêu đề</label>
		<input type="text" name="title" class="form-control col-md-7" value="{{ $lich->title }}">
	</div>	
<div class="form-group">
	<label for="content">Nội dung</label>
	<textarea id="content" name="content" rows="6" class="form-control">{{ $lich->content }}</textarea>
	<script> CKEDITOR.replace('content',{
		customConfig: '/admin_asset/ckeditor/config_lichtuan.js'
	});</script>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">Cập nhật</button>
</div>
</form>
@stop