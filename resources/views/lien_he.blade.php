@extends('layouts.master')
@section('head.title')
Liên hệ
@stop
@section('body.content')
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<p style="font-size:25px; margin-top: 20px; padding: 5px; color:#008C17; text-align: center; letter-spacing: -1.5px;">GỬI TIN NHẮN CHO CHÚNG TÔI</p>
	<p style="padding: 5px; text-align: justify;">Để không ngừng nâng cao chất lượng dịch vụ của Nhà trường, chúng tôi mong muốn nhận được các thông tin phản hồi. Bạn vui lòng điền đầy đủ thông tin vào form dưới đây để tư vấn viên của trường liên hệ với bạn giải đáp các thắc mắc hoàn toàn miễn phí.</p>
	<p style="margin-top: -15px; padding: 5px;"><font style="font-weight: bold;">Lưu ý:</font> Những mục đánh dấu <font style="color:red;">(*)</font> là thông tin bắt buộc phải điền.</p>
	<div class="row">
		<div class="col-md-7 pr-5 pl-5">						
			@if (session('status'))
			<div class="alert alert-success">{{ session('status') }}</div>
			@endif
			<form method="post" action="{{ route('lien_he.store') }}">
				{{ csrf_field() }}
				<div class="form-group row">
					<label class="col-form-label" for="hovaten">Họ và tên <font style="color:red;">(*)</font></label>
					<input type="text" class="form-control" name="hovaten" id="hovaten" required />
				</div>
				<div class="form-group row">
					<label class="col-form-label" for="dienthoai">Điện thoại liên hệ <font style="color:red;">(*)</font></label>
					<input type="text" class="form-control" name="dienthoai" id="dienthoai" required />
				</div>
				<div class="form-group row">
					<label for="tinNhan">Câu hỏi / Góp ý <font style="color:red;">(*)</font></label>
					<textarea id="tinNhan" name="tinNhan" class="form-control" rows="5" required></textarea>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-primary" name="guiTin">Gửi đi</button>
				</div>
			</form>
		</div>
		<div class="col-md-5">
			<div class="card border border-2 border-light">
				<div class="card-header text-center bg-primary text-white">Tư vấn tuyển sinh</div>
				<div class="card-body text-justify">Nếu bạn muốn trao đổi nhanh với chúng tôi về tuyển sinh. Hãy gọi cho chúng tôi theo số điện thoại sau: <font style="font-weight: bold;">0225.386.7752</font></div>
			</div>
		</div>
	</div>

</div>
<!-- End latest-post Area -->
@stop