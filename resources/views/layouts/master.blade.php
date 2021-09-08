<!DOCTYPE html>
<html lang="vi">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Favicon-->
	<link rel="shortcut icon" href="./img/favicon.ico">
	<!-- Author Meta -->
	<meta name="author" content="cdktcntp">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	@yield('head.meta')
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<base href="{{ asset('/') }}"/>
	<title>@yield('head.title')</title>
	<!-- CSS ============================================= -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.min.css">
	<link href="css/youtube-overlay.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Start MAIN slider -->
	<link rel="stylesheet" type="text/css" href="./slider/engine1/style.css" />
	<script type="text/javascript" src="js/vendor/jquery-2.2.4.min.js"></script>
	<!-- End MAIN slider -->
	@yield('head.css')
</head>
<body>
	@include('layouts.partials.header')
	@include('layouts.partials.slider')	
	<div class="site-main-container mt-1">
		<!-- Start top-post Area -->
		<section class="top-post-area">
			<div class="container no-padding">
				<div class="row small-gutters">
					<div class="col-lg-12">
						<div class="news-tracker-wrap">
							<h6><span>Thông báo mới: </span><a href="https://haiphong.edu.vn/tin-tuc-su-kien/tin-khan-so-gddt-thong-bao-diem-chuan-xet-tuyen-vao-lop-10-thpt-nam-hoc-2021-20/ct/10/206" target="_blank">Sở GD&ĐT: Thông báo điểm chuẩn xét tuyển vào lớp 10 THPT năm học 2021-2022 - Lần xét 3</a></h6>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End top-post Area -->
		<!-- Start latest-post Area -->
		<section class="latest-post-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 post-list p-0">
						<!-- Start latest-post Area -->
						@yield('body.content')
						<!-- End latest-post Area  -->
					</div>
					<!-- Start relavent-story-post Area -->
					
					@include('layouts.partials.sidebar')
					
					<!-- End relavent-story-post Area -->
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>
	<!-- start footer Area -->
	
	@include('layouts.partials.footer')
	
	<!-- End footer Area -->
	<script src="js/vendor/bootstrap.min.js"></script> 
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script> 
	<script src="js/backtotop.js"></script>
	@yield('footer.js')
</body>
</html>