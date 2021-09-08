@extends('admin.layouts.admin-master')
@section('head.title')
Thêm ảnh cho album
@stop
@section('body.title')
Thêm ảnh cho album
@stop
@section('body.content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form action="{{ route('image.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group col-md-6">
		<label>Chọn album</label>
		<select id="album_id" name="album_id" class="form-control">
			@foreach ($albums as $album)
			<option value="{{ $album->id }}">{{ $album->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-12">
		<label for="urls">Chọn ảnh</label>
		<textarea id="urls" name="urls" class="form-control" rows="8" readonly="readonly" onclick="openKCFinder(this)" style="cursor:pointer"></textarea>
	</div>
	<div class="form-group col-md-2">
		<button id="upload" name="upload" type="submit" class="btn btn-primary">Thực hiện</button>
	</div>
</form>
<script>
	function openKCFinder(textarea) {
		window.KCFinder = {
			callBackMultiple: function(images) {
				window.KCFinder = null;
				textarea.value = "";
				for (var i = 0; i < images.length; i++)
					textarea.value += images[i] + "\n";
			}
		};
		window.open('/admin_asset/ckeditor/kcfinder/browse.php?type=images&dir=images/albums/',
			'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
			'directories=0, resizable=1, scrollbars=0, width=800, height=600'
			);
	}
</script>
@stop