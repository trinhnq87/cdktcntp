@extends('layouts.master')
@section('head.title')
Đăng ký trực tuyến
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<div class="row">	
		<div class="col-md-8">
			<p style="font-size:25px; margin-top: 20px; padding: 5px; color:#008C17; text-align: center;"><b>ĐĂNG KÝ XÉT TUYỂN TRỰC TUYẾN</b></p>
			<p style="padding: 5px; text-align: justify;">Chào bạn, cảm ơn bạn đã quan tâm tìm hiểu về chương trình đào tạo của trường <b>Cao đẳng Kinh tế và Công nghệ thực phẩm</b>. Bạn vui lòng điền đầy đủ thông tin cá nhân vào bảng đăng ký xét tuyển trực tuyến bên cạnh để tư vấn viên của trường liên hệ với bạn giải đáp các thắc mắc hoàn toàn miễn phí.</p>
			<p style="margin-top: -15px; padding: 5px;"><b>Lưu ý:</b> Những mục đánh dấu <font style="color:red;">(*)</font> là thông tin bắt buộc phải điền.</p>
			<form method="post" action="{{ route('dang_ky.store') }}">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6 col-sm-6 pr-4 pl-4">
						<div class="form-group row">
							<label class="col-form-label" for="hovaten">Họ và tên <font style="color:red;">(*)</font></label>
							<input type="text" class="form-control" name="hovaten" id="hovaten" required />
						</div>
						<div class="form-group row">
							<label class="col-form-label" for="dienthoai">Điện thoại liên hệ <font style="color:red;">(*)</font></label>
							<input type="text" class="form-control" name="dienthoai" id="dienthoai" required />
						</div>
						<div class="form-group row">
							<label class="col-form-label" for="ngaysinh">Ngày sinh <font style="color:red;">(*)</font></label>
							<input class="form-control" id="ngaysinh" name="ngaysinh" placeholder="DD/MM/YYYY" type="text"/>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 pr-4 pl-4">											
						<div class="form-group row">
							<label class="col-form-label" for="diachi">Địa chỉ</label>
							<input type="text" class="form-control" name="diachi" id="diachi" />
						</div>																		
						<div class="form-group row">
							<label class="col-form-label" for="truong">Trường</label>
							<input type="text" class="form-control" name="truong" id="truong" />
						</div>																		
						<div class="form-group row">
							<label class="col-form-label" for="tongket">Điểm tổng kết lớp 12</label>
							<input type="text" class="form-control" name="tongket" id="tongket" required="" />
						</div>
					</div>
					<div class="col-md-12 pr-4 pl-4">
						<div class="form-group row">
							<label for="hedaotao" class="col-form-label">Ngành, nghề đăng ký <font style="color:red;">(*)</font></label>
							<select name="nganh_nghe" id="nganh_nghe" class="form-control" required>
								<option value=""> -- Chọn ngành, nghề -- </option>
								<optgroup label="Trình độ cao đẳng">
									<option value="CĐ Kế toán doanh nghiệp">Kế toán doanh nghiệp</option>
									<option value="CĐ Công nghệ thông tin">Công nghệ thông tin</option>
									<option value="CĐ Chế biến thực phẩm">Chế biến thực phẩm</option>
									<option value="CĐ Điện Công nghiệp">Điện Công nghiệp</option>
									<option value="CĐ Điện Dân dụng">Điện Dân dụng</option>
								</optgroup>
								<optgroup label="Trình độ trung cấp">
									<option value="TC Kế toán doanh nghiệp">Kế toán doanh nghiệp</option>
									<option value="TC Công nghệ thông tin (ƯDPM)">Công nghệ thông tin (ƯDPM)</option>
									<option value="TC Công nghệ kỹ thuật chế biến và BQTP">Công nghệ kỹ thuật chế biến và BQTP</option>
									<option value="TC Điện công nghiệp và dân dụng">Điện công nghiệp và dân dụng</option>
									<option value="TC Điện dân dụng">Điện dân dụng</option>
									<option value="TC Kế toán hành chính sự nghiệp
									">Kế toán hành chính sự nghiệp
								</option>
								<option value="TC Tin học ứng dụng
								">Tin học ứng dụng
							</option>
							<option value="TC Chế biến thực phẩm
							">Chế biến thực phẩm
						</option>
						<option value="TC Điện công nghiệp
						">Điện công nghiệp
					</option>
					<option value="TC Công nghệ kỹ thuật SX muối
					">Công nghệ kỹ thuật SX muối
				</option>
			</optgroup>								
			<optgroup label="Trình độ sơ cấp">
				<option value="Công nghệ nuôi trồng, chế biến nấm
				">Công nghệ nuôi trồng, chế biến nấm
			</option>
		</optgroup>
	</select>
</div>
<div class="form-group row justify-content-center">
	<button type="submit" class="btn btn-primary" name="dangky">Gửi đăng ký</button>
</div>
</div>
</div>
</form>
</div>
<div class="col-md-4">
	<div class="card mt-5">
		<div class="bg-success card-header text-center text-white">Hệ cao đẳng</div>
		<div class="card-body fz-12 p-2">
			<ul>
				<li>Kế toán doanh nghiệp</li>
				<li>Công nghệ thông tin</li>
				<li>Chế biến thực phẩm</li>
				<li>Điện Công nghiệp</li>
				<li>Điện Dân dụng</li>
			</ul>
		</div>
	</div>
	<div class="card mt-2">
		<div class="bg-info card-header text-center text-white">Hệ trung cấp</div>
		<div class="card-body fz-12 p-2">
			<ul>
				<li>Kế to&aacute;n doanh nghiệp</li>
				<li>C&ocirc;ng nghệ th&ocirc;ng tin (ƯDPM)</li>
				<li>C&ocirc;ng nghệ kỹ thuật chế biến và BQTP</li>
				<li>Điện c&ocirc;ng nghiệp v&agrave; d&acirc;n dụng</li>
				<li>Điện d&acirc;n dụng</li>
				<li>Kế to&aacute;n h&agrave;nh ch&iacute;nh sự nghiệp</li>
				<li>Tin học ứng dụng</li>
				<li>Chế biến thực phẩm</li>
				<li>Điện c&ocirc;ng nghiệp</li>
				<li>C&ocirc;ng nghệ kỹ thuật SX muối</li>
			</ul>
		</div>
	</div>
	<div class="card mt-2">
		<div class="bg-warning card-header text-center text-white">Hệ sơ cấp</div>
		<div class="card-body fz-12 p-2">
			<ul>
				<li>C&ocirc;ng nghệ nu&ocirc;i trồng, chế biến nấm</li>
			</ul>
		</div>
	</div>
</div>
</div>
@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
</div>
<!-- End latest-post Area -->
@stop