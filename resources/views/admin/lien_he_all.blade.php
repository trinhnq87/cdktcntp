@extends('admin.layouts.admin-master')
@section('head.title')
Danh sách tin nhắn người dùng gửi
@stop
@section('head.css')
<link rel="stylesheet" type="text/css" href="./css/vanban.css" />
@stop
@section('body.title')
Danh sách tin nhắn người dùng gửi
@stop
@section('body.content')
<input class="form-control col-md-6" id="myInput" type="text" placeholder="Tìm kiếm...">
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		<tbody id="myTable">
			@foreach ($lienhes as $lienhe)									
			<tr>
				<td class="text-justify">
					<span class="thong-tin">Họ và tên: </span>{{ $lienhe->ho_va_ten }}<br/>
					<span class="thong-tin">Số điện thoại: </span>{{ $lienhe->sdt }}<br/>
					<span class="thong-tin">Tin nhắn: </span>{{ $lienhe->noi_dung }}<br/>
					<div class="navigation-wrap">
						<a class="delete" href="{{ route('lien_he.destroy',$lienhe->id) }}"><i class="fa fa-trash-o"></i> Xóa</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="pagination justify-content-center">
	{{ $lienhes->links("pagination::bootstrap-4") }}
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