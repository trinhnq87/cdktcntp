@extends('admin.layouts.admin-master')
@section('head.title')
Thêm album ảnh
@stop
@section('body.title')
Thêm album ảnh
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
<form action="{{ route('album.store') }}" method="post">
	{{ csrf_field() }}	
	<label>Tên album</label>
	<div class="form-group">
		<input type="text" name="name" class="form-control" required>
	</div>
	<label>Hình minh họa</label>
	<div class="form-group row pl-3">		
		<input type="text" name="thumbnail" id="thumbnail" class="col-md-8 col-lg-6 form-control" readonly="readonly"/>
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
window.open('/admin_asset/ckeditor/kcfinder/browse.php?type=images&dir=images/album_thumb/', 'kcfinder_textbox',
	'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
	'resizable=1, scrollbars=0, width=800, height=600'
	);
}
</script>
	<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>  <b>Thêm</b></button>
</form>
@stop