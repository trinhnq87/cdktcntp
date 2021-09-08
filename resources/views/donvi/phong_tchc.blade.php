@extends('layouts.master')
@section('head.title')
Phòng Tổ chức Hành chính
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<div class="donvi-title">Danh sách cán bộ, viên chức Phòng Tổ chức Hành chính</div>
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
					<td>Nguyễn Công Hùng</td>
					<td>Trưởng phòng</td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">2</td>
					<td>Đào Thị Bích Liên</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">3</td>
					<td>Hàn Thị Minh Ngọc</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">4</td>
					<td>Giáp Văn Huấn</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">5</td>
					<td>Bùi Xuân Luyện</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- End latest-post Area -->
@stop