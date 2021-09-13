@extends('admin.layouts.admin-master')
@section('head.title')
Thêm lịch mới
@stop
@section('head.css')
<script src="./admin_asset/ckeditor/ckeditor.js"></script>
@stop
@section('body.title')
Thêm lịch mới
@stop
@section('body.content')
<form action="{{ route('lichtuan.store') }}" method="post">
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
		<input type="text" name="title" class="form-control col-md-7">
	</div>	
<div class="form-group">
	<label for="content">Nội dung</label>
	<textarea id="content" name="content" rows="6" class="form-control"></textarea>
	<script> CKEDITOR.replace('content',{
		customConfig: '/admin_asset/ckeditor/config_lichtuan.js'
	});</script>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>  <b>Thêm</b></button>
</div>
</form>
@stop