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
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<base href="{{ asset('/') }}"/>
	<title>@yield('head.title')</title>
	<!-- CSS ============================================= -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	@yield('head.css')
</head>
<body>
	<div class="site-main-container mt-1">
		<!-- Start latest-post Area -->
		<section class="latest-post-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 post-list p-0">
						<!-- Start latest-post Area -->
						@yield('body.content')
						<!-- End latest-post Area  -->
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>
</body>
</html>