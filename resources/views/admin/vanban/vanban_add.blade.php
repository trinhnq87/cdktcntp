@extends('admin.layouts.admin-master')
@section('head.title')
Thêm văn bản
@stop
@section('body.title')
Thêm văn bản
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
<form action="{{ route('vanban.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group row">
		<label for="soVanban" class="col-md-3 col-form-label">Số văn bản</label>
		<input type="text" name="soVanban" id="soVanban" value="" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="tenVanban" class="col-md-3 col-form-label">Tên văn bản</label>
		<input type="text" name="tenVanban" id="tenVanban" value="" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="urlVanban" class="col-md-3 col-form-label">Url Văn bản</label>
		<input type="text" name="urlVanban" id="urlVanban" value="" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="ngayBanHanh" class="col-md-3 col-form-label">Ngày ban hành</label>
		<input type="date" id="ngayBanHanh" name="ngayBanHanh" min="01-01-2010" max="31-12-2030" class="col-md-6 form-control" required>
	</div>
	<div class="form-group">
		<button id="add" name="add" type="submit" class="btn btn-primary mt-3">Thực hiện</button>
	</div>
</form>
@stop