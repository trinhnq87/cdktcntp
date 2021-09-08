@extends('admin.layouts.admin-master')
@section('head.title')
Quản lý chuyên mục
@stop
@section('body.title')
Quản lý chuyên mục
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
<table class="table table-bordered">
	<thead>
		<tr>
			<th width="5%">STT</th>
			<th>Tên chuyên mục</th>
		</tr>
	</thead>
	<tbody>
		@php
		$i = 1
		@endphp
		@foreach($category as $cat)
		<tr>
			<td>{{ $i }}</td>
			<td>{{ $cat->name }}</td>
		</tr>
		@php
		$i++
		@endphp
		@endforeach
	</tbody>
</table>
<form action="{{ route('category.create') }}" method="post">
	{{ csrf_field() }}
	<div class="input-group">
		<input type="text" name="cat_name" id="cat_name" class="form-control col-md-4" placeholder="Nhập tên chuyên mục" required />
		<span class="input-group-btn"><button class="btn btn-primary ml-3" type="submit"><i class="fa fa-plus"></i>  <b>Thêm</b></button></span>
	</div>
</form>
@stop