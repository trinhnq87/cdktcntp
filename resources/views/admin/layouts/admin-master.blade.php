<!doctype html>
<html lang="vi">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8"> 
	<title>@yield('head.title')</title>
	<base href="{{ asset('/') }}"/>
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="./admin_asset/css/admin.css"/>
	@yield('head.css')
</head>
<body>
	<header class="container header_bg">
		<div class="row">
			<div class="col-md-6 pt-1 pb-1">
				<a href="{{ route('homepage') }}"><img src="./admin_asset/images/adminPage.png" height="39px"></a>
			</div>
		</div>
	</header>	
	<div class="container">
		<div class="row">
			<div class="col-md-3 bg3">
				<aside>
					<ul class="nav flex-column">
						@if(Auth::user()->level<=1)
						<div class="accordion" id="accordionExample">
							<div class="menu_item" id="headingOne">
								<a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									<span><i class="fa fa-newspaper-o fa-fw"></i>Tin tức</span>
									<i class="fa fa-chevron-down toggle pr-4"></i>
								</a>
							</div>
							<div id="collapseOne" class="collapse" data-parent="#accordionExample">
								<ul class="list-group">
									<li class="list-group-item"><a href="{{ route('post.create') }}"><i class="fa fa-plus-circle"></i> Thêm bản tin mới</a></li>
									<li class="list-group-item"><a href="{{ route('post.list') }}"><i class="fa fa-list"></i> Danh sách bản tin</a></li>
									<li class="list-group-item"><a href="{{ route('category.list') }}"><i class="fa fa-cog"></i> Quản lý chuyên mục</a></li>
								</ul>
							</div>
						</div>
						<li>
							<a href="{{ route('gioithieu.list') }}" class="nav-link"><i class="fa fa-university fa-fw" aria-hidden="true"></i>Giới thiệu</a>
						</li>
						<li>
							<a href="{{ route('lichtuan.all') }}" class="nav-link"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Lịch tuần</a>
						</li>
						<li>
							<a href="{{ route('hssv.add') }}" class="nav-link"><i class="fa fa-vcard fa-fw" aria-hidden="true"></i>Danh sách HSSV</a>
						</li>
						<div class="accordion" id="accordionAlbum">
							<div class="menu_item" id="heading1">
								<a data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
									<span><i class="fa fa-image fa-fw"></i>Thư viện ảnh</span>
									<i class="fa fa-chevron-down toggle"></i>
								</a>
							</div>
							<div id="collapse1" class="collapse" data-parent="#accordionAlbum">
								<ul class="list-group">
									<li class="list-group-item"><a href="{{ route('album.create') }}"><i class="fa fa-plus"></i> Thêm album mới</a></li>
									<li class="list-group-item"><a href="{{ route('album.all') }}"><i class="fa fa-list-alt"></i> Danh sách album</a></li>
									<li class="list-group-item"><a href="{{ route('image.add') }}"><i class="fa fa-plus-circle"></i> Thêm ảnh cho album</a></li>
								</ul>
							</div>
						</div>
						<li>
							<a href="{{ route('vanban.add') }}" class="nav-link"><i class="fa fa-files-o fa-fw"></i>Văn bản</a>
						</li>
						<li>
							<a href="{{ route('bieumau.add') }}" class="nav-link"><i class="fa fa-file-word-o fa-fw"></i>Biểu mẫu, sổ sách</a>
						</li>
						<li>
							<a href="{{ route('dang_ky.all') }}" class="nav-link"><i class="fa fa-share-alt fa-fw" aria-hidden="true"></i>Đăng ký trực tuyến</a>
						</li>
						<li>
							<a href="{{ route('lien_he.all') }}" class="nav-link"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>Liên hệ</a>
						</li>
						<li>
							<a href="{{ route('logout') }}" class="nav-link"><i class="fa fa-sign-out fa-fw"></i></i>Thoát</a>
						</li>
						@elseif (Auth::user()->level==2)
						<li>
							<a href="{{ route('hssv.add') }}" class="nav-link"><i class="fa fa-vcard fa-fw" aria-hidden="true"></i>Danh sách HSSV</a>
						</li>
						<li>
							<a href="{{ route('logout') }}" class="nav-link"><i class="fa fa-sign-out fa-fw"></i></i>Thoát</a>
						</li>
						@else
						<li>
							<a href="{{ route('logout') }}" class="nav-link"><i class="fa fa-sign-out fa-fw"></i></i>Thoát</a>
						</li>
						@endif
					</ul>
				</aside>
			</div>
			<div class="col-md-9 bg9">
				<div class="white-box">
					<h3 class="box-title">@yield('body.title')</h3>
					@yield('body.content')
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="text-center"><i>2021 © Trang quản trị website trường Cao đẳng Kinh tế và Công nghệ thực phẩm</i></div>
		</footer>
	</div>		
</div>
<script src="../js/vendor/jquery-2.2.4.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
@yield('body.js')
</body>
</html>					