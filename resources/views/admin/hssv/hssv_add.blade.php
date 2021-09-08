@extends('admin.layouts.admin-master')
@section('head.title')
Thêm danh sách HSSV
@stop
@section('body.title')
Thêm danh sách HSSV
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
<form method="post" action="{{ route('hssv.store') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group row">
		<label for="maLop" class="col-md-3 col-form-label">Mã lớp</label>
		<input type="text" name="maLop" id="maLop" value="" class="col-md-6 form-control" required>
	</div>
	<div class="form-group row">
		<label for="khoa" class="col-md-3 col-form-label">Khoa</label>
		<select name="khoa" id="khoa" class="col-md-6 form-control">
			<option value=""> -- Chọn khoa -- </option>
			<option value="0">Công nghệ thông tin</option>
			<option value="1">Kinh tế</option>
			<option value="2">Điện, điện tử</option>
			<option value="3">Công nghệ thực phẩm và muối</option>
		</select>
	</div>
	<div class="form-group row">
		<label for="nganhNghedtao" class="col-md-3 col-form-label">Ngành, nghề đào tạo</label>
		<select name="nganhNghedtao" id="nganhNghedtao" class="col-md-6 form-control">
			<option value=""> -- Chọn ngành, nghề -- </option>
		</select>
	</div>

	<div class="form-group row">
		<label for="khoaHoc" class="col-md-3 col-form-label">Khóa học</label>
		<select name="khoaHoc" id="khoaHoc" class="col-md-6 form-control">
			<option value="2018-2020" selected>2018-2020</option>
			<option value="2019-2021">2019-2021</option>
			<option value="2020-2022">2020-2022</option>
			<option value="2021-2023">2021-2023</option>
		</select>
	</div>
	<input type="file" id="myfile" name="myfile" required>
	<div class="form-group text-center">
		<button id="add" name="add" type="submit" class="btn btn-primary mt-3">Thực hiện</button>
	</div>
</form>
@stop
@section('body.js')
<script type="text/javascript">
	$(document).ready(function() {
		$("#khoa").change(function() {
			var val = $(this).val();
			$("#nganhNghedtao").html(options[val]);
		});
		var options = [
		"<option value='Công nghệ thông tin (ƯDPM)'>Công nghệ thông tin (ƯDPM)</option><option value='Tin học ứng dụng'>Tin học ứng dụng</option><option value='Công nghệ thông tin'>Công nghệ thông tin</option>",
		"<option value='Kế toán doanh nghiệp'>Kế toán doanh nghiệp</option><option value='Kế toán hành chính sự nghiệp'>Kế toán hành chính sự nghiệp</option>",
		"<option value='Điện công nghiệp và dân dụng'>Điện công nghiệp và dân dụng</option><option value='Điện công nghiệp'>Điện công nghiệp</option>",
		"<option value='Chế biến thực phẩm'>Chế biến thực phẩm</option><option value='Công nghệ kỹ thuật chế biến & bảo quản thực phẩm'>Công nghệ kỹ thuật chế biến & bảo quản thực phẩm</option>"
		];
	});
</script>
@stop