@extends('layouts.master')
@section('head.title')
Phòng Công tác học sinh, sinh viên
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<div class="donvi-title">Danh sách cán bộ, viên chức Phòng Công tác học sinh, sinh viên</div>
	<div class="table-responsive mt-3">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="text-center" style="width: 5%;">STT</th>
					<th class="text-center">Họ và tên</th>
					<th class="text-center">Chức vụ</th>
					<th class="text-center">Số điện thoại</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center">1</td>
					<td>Ngô Thị Huệ</td>
					<td>Trưởng phòng</td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">2</td>
					<td>Nguyễn Thị Hợp</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">3</td>
					<td>Nguyễn Thị Hằng</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">4</td>
					<td>Bùi Lê Trang</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- End latest-post Area -->
@stop