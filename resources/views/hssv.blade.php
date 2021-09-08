@extends('layouts.master')
@section('head.title')
Danh sách HSSV
@stop
@section('body.content')
<div class="latest-post-wrap">
	<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Danh sách học sinh, sinh viên</h1>
	<hr/>
	<input class="form-control col-md-6" id="myInput" type="text" placeholder="Tìm kiếm...">
	<div id="noidung">
		<h4>Khoa CNTT</h4>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="text-center">
					<tr>
						<th style="width:5%">STT</th>
						<th style="width:20%">Mã lớp</th>
						<th>Ngành, nghề đào tạo</th>
						<th style="width:18%">Ngày cập nhật</th>
						<th style="width:18%">Người cập nhật</th>
						@auth
						<th style="width:5%">Xóa</th>
						@endauth
					</tr>
				</thead>
				<tbody id="myTable">
					@php
					$i = 1;
					@endphp
					@foreach ($lop_cntt as $lop0)
					<tr>
						<td class="text-center">{{ $i }}</td>
						<td class="text-uppercase"><a href="{{ $lop0->url }}">{{ $lop0->ma_lop }}</a></td>
						<td>{{ $lop0->nganh_nghe_dtao }}</td>
						<td>{{ $lop0->created_at->format('d/m/Y') }}</td>
						<td class="text-center">{{ $lop0->getUser->name }}</td>
						@if (Auth::check() && Auth::user()->id == $lop0->user_id)
						<td><a href="{{ route('hssv.destroy',$lop0->id) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
						@endif
					</tr>
					@php
					$i++;
					@endphp
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- bảng 2 -->
		<h4>Khoa Kinh tế</h4>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="text-center">
					<tr>
						<th style="width:5%">STT</th>
						<th style="width:20%">Mã lớp</th>
						<th>Ngành, nghề đào tạo</th>
						<th style="width:18%">Ngày cập nhật</th>
						<th style="width:18%">Người cập nhật</th>
						@auth
						<th style="width:5%">Xóa</th>
						@endauth
					</tr>
				</thead>
				<tbody id="myTable1">
					@php
					$i = 1;
					@endphp
					@foreach ($lop_kte as $lop1)					
					<tr>
						<td class="text-center">{{ $i }}</td>
						<td class="text-uppercase"><a href="{{ $lop1->url }}">{{ $lop1->ma_lop }}</a></td>
						<td>{{ $lop1->nganh_nghe_dtao }}</td>						
						<td>{{ $lop1->created_at->format('d/m/Y') }}</td>
						<td class="text-center">{{ $lop1->getUser->name }}</td>
						@if (Auth::check() && Auth::user()->id == $lop1->user_id)
						<td><a href="{{ route('hssv.destroy',$lop1->id) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
						@endif
					</tr>
					@php
					$i++;
					@endphp
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- bảng 3 -->
		<h4>Khoa Điện - Điện tử</h4>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="text-center">
					<tr>
						<th style="width:5%">STT</th>
						<th style="width:20%">Mã lớp</th>
						<th>Ngành, nghề đào tạo</th>
						<th style="width:18%">Ngày cập nhật</th>
						<th style="width:18%">Người cập nhật</th>
						@auth
						<th style="width:5%">Xóa</th>
						@endauth
					</tr>
				</thead>
				<tbody id="myTable2">					
					@php
					$i = 1;
					@endphp
					@foreach ($lop_ddtu as $lop2)					
					<tr>
						<td class="text-center">{{ $i }}</td>
						<td class="text-uppercase"><a href="{{ $lop2->url }}">{{ $lop2->ma_lop }}</a></td>
						<td>{{ $lop2->nganh_nghe_dtao }}</td>
						<td>{{ $lop2->created_at->format('d/m/Y') }}</td>
						<td class="text-center">{{ $lop2->getUser->name }}</td>
						@if (Auth::check() && Auth::user()->id == $lop2->user_id)
						<td><a href="{{ route('hssv.destroy',$lop2->id) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
						@endif
					</tr>
					@php
					$i++;
					@endphp
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- bảng 4 -->
		<h4>Khoa Công nghệ thực phẩm & Muối</h4>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="text-center">
					<tr>
						<th style="width:5%">STT</th>
						<th style="width:20%">Mã lớp</th>
						<th>Ngành, nghề đào tạo</th>
						<th style="width:18%">Ngày cập nhật</th>
						<th style="width:18%">Người cập nhật</th>
						@auth
						<th style="width:5%">Xóa</th>
						@endauth
					</tr>
				</thead>
				<tbody id="myTable3">					
					@php
					$i = 1;
					@endphp
					@foreach ($lop_cntp as $lop3)					
					<tr>
						<td class="text-center">{{ $i }}</td>
						<td class="text-uppercase"><a href="{{ $lop3->url }}">{{ $lop3->ma_lop }}</a></td>
						<td>{{ $lop3->nganh_nghe_dtao }}</td>
						<td>{{ $lop3->created_at->format('d/m/Y') }}</td>
						<td class="text-center">{{ $lop3->getUser->name }}</td>
						@if (Auth::check() && Auth::user()->id == $lop3->user_id)
						<td><a href="{{ route('hssv.destroy',$lop3->id) }}"><i class="fa fa-trash-o text-danger"></i></a></td>
						@endauth
					</tr>
					@php
					$i++;
					@endphp
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#noidung tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>		
@stop