<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang đăng nhập</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style type="text/css">
		.loginForm {
			max-width: 500px;
			padding: 1rem 1rem 2rem 1rem;
			margin: 0 auto;
			background: #fff;
		}
	</style>
</head>
<body style="background:#96B5BA">
	<div class="loginForm mt-5">
		<form method="post" action="{{ route('postLogin') }}">
			{{ csrf_field() }}			
			<span class="text-left h4" style="letter-spacing: -2.5px;">Cao đẳng KT & CNTP</span>&nbsp;<span class="text-muted">Administration</span>
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
			<div class="form-group">
				<label class="col-form-label" for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" required />
			</div>
			<div class="form-group">
				<label class="col-form-label" for="password">Mật khẩu</label>
				<input type="password" class="form-control" name="password" id="password" required />
			</div>
			<div class="text-center">
				<button id="login" name="login" type="submit" class="col-md-4 btn" style="background:#66E8DC; color:#fff;"><span class="h6">Đăng nhập</span></button>
			</div>
		</form>
	</div>
</body>
</html>				