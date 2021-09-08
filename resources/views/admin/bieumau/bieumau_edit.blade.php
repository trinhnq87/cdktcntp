@extends('admin.layouts.admin-master')
@section('head.title')
Sửa biểu mẫu, sổ sách
@stop
@section('body.title')
Sửa biểu mẫu, sổ sách
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
<form action="{{ route('bieumau.update',$bieumau->slug) }}" method="post">
	{{ csrf_field() }}
	<div class="form-group row">
		<label for="tenBieumau" class="col-md-3 col-form-label">Tên biểu mẫu</label>
		<input type="text" name="tenBieumau" id="tenBieumau" value="{{ $bieumau->name }}" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="group" class="col-md-3 col-form-label">Thuộc nhóm</label>
		<select name="group" id="group" class="col-md-6 form-control">
			<option value="Giành cho Giáo viên, CBCNV" selected>Giành cho Giáo viên, CBCNV</option>
			<option value="Giành cho Học sinh, Sinh viên">Giành cho Học sinh, Sinh viên</option>
		</select>
	</div>
	<div class="form-group row">
		<label for="urlBieumau" class="col-md-3 col-form-label">Url Biểu mẫu</label>
		<input type="text" name="urlBieumau" id="urlBieumau" value="{{ $bieumau->url }}" class="col-md-6 form-control" required>
	</div>
	<div class="form-group">
		<button id="add" name="add" type="submit" class="btn btn-primary mt-3">Thực hiện</button>
	</div>
</form>
@stop