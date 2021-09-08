@extends('admin.layouts.admin-master')
@section('head.title')
Sửa văn bản
@stop
@section('body.title')
Sửa văn bản
@stop
@section('body.content')
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
<form action="{{ route('vanban.update',$vanban->slug) }}" method="post">
	{{ csrf_field() }}
	<div class="form-group row">
		<label for="soVanban" class="col-md-3 col-form-label">Số văn bản</label>
		<input type="text" name="soVanban" id="soVanban" value="{{ $vanban->sovb }}" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="tenVanban" class="col-md-3 col-form-label">Tên văn bản</label>
		<input type="text" name="tenVanban" id="tenVanban" value="{{ $vanban->name }}" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="urlVanban" class="col-md-3 col-form-label">Url Văn bản</label>
		<input type="text" name="urlVanban" id="urlVanban" value="{{ $vanban->url }}" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="ngayBanHanh" class="col-md-3 col-form-label">Ngày ban hành</label>
		<input type="date" id="ngayBanHanh" value="{{ $vanban->ngay_ban_hanh }}" name="ngayBanHanh" min="01-01-2010" max="31-12-2030" class="col-md-6 form-control" required>
	</div>
	<div class="form-group">
		<button id="add" name="add" type="submit" class="btn btn-primary mt-3">Thực hiện</button>
	</div>
</form>
@stop