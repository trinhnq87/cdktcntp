<header>
	<div class="container no-padding">
		<div class="border-top" style="font-size: 16px !important;"></div>
		<div class="logo-wrap">
			<div class="container banner">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-4 col-md-4 col-sm-12 logo-left">
						<a href="{{ route('homepage') }}">
							<img class="img-fluid" src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding">
						<div class="header-top d-md-block d-none">
							<div class="container">
								<div class="row">
									<div class="header-top-right col-lg-12">
										<ul>
											<li><a href="{{ route('lien_he') }}">Liên hệ</a></li>
											<li><a href="{{ route('hssv.list') }}">Danh sách HSSV</a></li>
											<li><a href="{{ route('ban_do') }}">Bản đồ trường</a></li>
											@auth
											<li><a href="{{ route('admin.homepage') }}">Quản trị</a></li>
											<li><a href="{{ route('logout') }}">Thoát</a></li>@else	
											<li><a href="{{ route('login') }}">Đăng nhập</a></li>
											@endauth
										</ul>
									</div>
								</div>
								<div class="row justify-content-lg-end pt-4 pr-3">
									<div class="d-none d-lg-block">
										<form class="example" method="get" action="{{ route('timkiem') }}">
											<input type="text" name="tukhoa" placeholder="Tìm kiếm..." required>
											<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu" id="main-menu">
			<div class="row align-items-center justify-content-center">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="{{ route('homepage') }}">Trang chủ</a></li>
						<li class="menu-has-children"><a href="">Giới thiệu</a>
							<ul>
								@foreach ($gioithieus as $gioithieu)
								<li><a href="{{ route('gioithieu.show',$gioithieu->slug) }}">{{ $gioithieu->title }}</a></li>
								@endforeach
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Tin tức</a>
							<ul>
								@foreach ($globalCat as $cat)
								<li><a href="{{ route('category.show',$cat->slug) }}">{{ $cat->name }}</a></li>
								@endforeach
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Đơn vị trực thuộc</a>
							<ul>
								<li class="menu-has-children"><a href="">Phòng</a>
									<ul>
										<li><a href="{{ route('donvi','phong_daotao') }}">Phòng Đào tạo</a></li>
										<li><a href="{{ route('donvi','phong_tckt') }}">Phòng Tài chính Kế toán</a></li>
										<li><a href="{{ route('donvi','phong_tchc') }}">Phòng Tổ chức Hành chính</a></li>
										<li><a href="{{ route('donvi','phong_qttb') }}">Phòng Quản trị thiết bị</a></li>			
										<li><a href="{{ route('donvi','phong_kdcl_khhtqt') }}">Phòng Kiểm định chất lượng & Khoa học, Hợp tác Quốc tế</a></li>
										<li><a href="{{ route('donvi','phong_cthssv') }}">Phòng Công tác học sinh, sinh viên</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="">Khoa, Tổ môn</a>
									<ul>
										<li><a href="{{ route('donvi','khoa_cntp_muoi') }}">Khoa Công nghệ thực phẩm và Muối</a></li>
										<li><a href="{{ route('donvi','khoa_dien_dientu') }}">Khoa Điện - Điện tử</a></li>
										<li><a href="{{ route('donvi','khoa_cntt') }}">Khoa Công nghệ thông tin</a></li>
										<li><a href="{{ route('donvi','khoa_khcb') }}">Khoa Khoa học cơ bản</a></li>
										<li><a href="{{ route('donvi','khoa_kinhte') }}">Khoa Kinh tế</a></li>
										<li><a href="{{ route('donvi','to_gdct') }}">Tổ bộ môn Giáo dục chính trị</a></li>
									</ul>
								</li>
								<li><a href="{{ route('donvi','trungtam_tsgtvl_nnth') }}">TT. tuyển sinh, GTVL và NN, Tin học</a></li>
							</ul>
						</li>
						<li><a href="{{ route('lichtuan') }}">Lịch tuần</a></li>
						<!-- <li><a href="{{ route('album') }}">Thư viện ảnh</a></li> -->
						<li><a href="{{ route('vanban') }}">Văn bản</a></li>
						<li class="d-md-none"><a href="{{ route('lien_he') }}">Liên hệ</a></li>
						<li class="d-md-none"><a href="{{ route('hssv.list') }}">Danh sách HSSV</a></li>
						<li class="d-md-none"><a href="{{ route('login') }}">Đăng nhập</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
				<div class="navbar-right d-lg-none">
					<form class="Search" method="get" action="{{ route('timkiem') }}">
						<input type="text" class="form-control Search-box" name="tukhoa" id="Search-box" placeholder="Tìm kiếm..." required>
						<label for="Search-box" class="Search-box-label">
							<span class="fa fa-search text-white"></span>
						</label>
						<span class="Search-close">
							<span class="fa fa-times text-white"></span>
						</span>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>