@extends('admin.layouts.admin-master')
@section('head.title')
Thêm bài viết
@stop
@section('head.css')
<script src="./admin_asset/ckeditor/ckeditor.js"></script>
@stop
@section('body.title')
Thêm bài viết
@stop
@section('body.content')
<form action="{{ route('post.store') }}" method="post">
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
	<label>Chuyên mục</label>
	<div class="form-group row pl-3">
		<select id="category" name="category" class="form-control col-md-5">
			@foreach($category as $cat)
			<option value="{{ $cat->id }}">{{ $cat->name }}</option>
			@endforeach
		</select>
		<div class="form-check form-check-inline col-md-5 pl-md-5">
			<label class="form-check-label text-danger">
				<input type="checkbox" class="form-check-input" name="group">Tin nổi bật
			</label>
		</div>
	</div>
	<label>Hình minh họa</label>
	<div class="form-group row pl-3">		
		<input type="text" name="thumbnail" id="thumbnail"  class="col-md-8 col-lg-6 form-control" readonly="readonly"/>
		&nbsp;
		<input type="button" onclick="openKCFinder(this)" name="chooseThumbnail" id="chooseThumbnail" class="col-md-3 col-lg-2 form-control btn-primary" value="Chọn hình"/>
	</div>
	<script>
		function openKCFinder(field) {
			window.KCFinder = {
				callBack: function(url) {
	thumbnail.value = url; //thumbnail: name của textfield nhận url của ảnh
	window.KCFinder = null;
}
};
window.open('/admin_asset/ckeditor/kcfinder/browse.php?type=images&dir=images/news/', 'kcfinder_textbox',
	'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
	'resizable=1, scrollbars=0, width=800, height=600'
	);
}
</script>
<div class="form-group">
	<label for="introtext">Giới thiệu ngắn gọn</label>
	<textarea name="introtext" rows="5" class="form-control col-md-9"></textarea>
</div>
<div class="form-group">
	<label for="content">Nội dung</label>
	<textarea id="content" name="content" rows="6" class="form-control"></textarea>
	<script> CKEDITOR.replace('content');</script>
</div>
@if (Auth::user()->id==1)
<p data-toggle="collapse" data-target="#nangcao">Đặt lại thời gian cho bài viết (Nếu cần)</p>
<div id="nangcao" class="collapse">
	<div class="form-group">
		<input type="text" name="date" class="form-control col-md-7">
	</div>
</div>
@endif
<div class="form-group">
	<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>  <b>Thêm</b></button>
</div>
</form>
@stop