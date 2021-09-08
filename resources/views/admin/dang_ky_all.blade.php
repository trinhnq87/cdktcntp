@extends('admin.layouts.admin-master')
@section('head.title')
Danh sách đăng ký trực tuyến
@stop
@section('head.css')
<link rel="stylesheet" type="text/css" href="./css/vanban.css" />
@stop
@section('body.title')
Danh sách đăng ký trực tuyến
@stop
@section('body.content')
<input class="form-control col-md-6" id="myInput" type="text" placeholder="Tìm kiếm...">
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		<tbody id="myTable">
			@foreach ($dangkys as $dangky)									
			<tr>
				<td class="text-justify">
					<span class="thong-tin">Họ và tên: </span>{{ $dangky->ho_va_ten }}<br/>
					<span class="thong-tin">Số điện thoại: </span>{{ $dangky->sdt }}<br/>
					<span class="thong-tin">Ngày sinh: </span>{{ $dangky->ngay_sinh }}<br/>
					<span class="thong-tin">Địa chỉ: </span>{{ $dangky->dia_chi }}<br/>
					<span class="thong-tin">Trường: </span>{{ $dangky->truong }}<br/>
					<span class="thong-tin">Điểm tổng kết lớp 12: </span>{{ $dangky->tong_ket }}<br/>
					<span class="thong-tin">Ngành, nghề đăng ký: </span>{{ $dangky->nganh_nghe }}<br/>
					<div class="navigation-wrap">
						<a class="delete" href="{{ route('dang_ky.destroy',$dangky->id) }}"><i class="fa fa-trash-o"></i> Xóa</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="pagination justify-content-center">
	{{ $dangkys->links("pagination::bootstrap-4") }}
</div>
@stop
@section('body.js')
<script>
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>
@stop