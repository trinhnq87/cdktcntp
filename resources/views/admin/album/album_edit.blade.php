@extends('admin.layouts.admin-master')
@section('head.title')
Chỉnh sửa tên album ảnh
@stop
@section('body.title')
Chỉnh sửa tên album ảnh
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
<form action="{{ route('album.update',$album->slug) }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Tên album</label>
		<input type="text" name="name" value="{{ $album->name }}" class="form-control" required>
	</div>
	<button name="update" type="submit" class="btn btn-primary">Thực hiện</button>
</form>
@stop