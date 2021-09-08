@extends('layouts.master')
@section('head.title')
Phòng Quản trị thiết bị
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<div class="donvi-title">Danh sách cán bộ, viên chức Phòng Quản trị thiết bị</div>
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
					<td>Nguyễn Văn Lãm</td>
					<td>Phó Trưởng phòng</td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">3</td>
					<td>Nguyễn Xuân Hùng</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">4</td>
					<td>Lương Đức Viên</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">5</td>
					<td>Phùng Thị Thủy</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">6</td>
					<td>Trần Thị Thu Hoài</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-center">7</td>
					<td>Phạm Thị Hoài</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- End latest-post Area -->
@stop