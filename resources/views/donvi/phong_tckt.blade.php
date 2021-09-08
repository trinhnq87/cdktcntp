@extends('layouts.master')
@section('head.title')
Phòng Tài chính kế toán
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<div class="donvi-title">Danh sách cán bộ, viên chức Phòng Tài chính kế toán</div>
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
					<td>Lê Hồng Đại</td>
					<td>Trưởng phòng</td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">2</td>
					<td>Khúc Thị Huyền</td>
					<td>Phó Trưởng phòng</td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">3</td>
					<td>Đỗ Thị Thu Hường</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">4</td>
					<td>Phạm Thị Thu Huyền</td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">5</td>
					<td>Bùi Thị Huyên</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- End latest-post Area -->
@stop