<div class="col-lg-4 pl-lg-2 p-0">
	<div class="sidebars-area">
		<div class="single-sidebar-widget">
			<div class="category-title">	
				<span class="title-icon">
					<i class="fa fa-star" aria-hidden="true"></i>
				</span><span class="cat-title"><a href="#">Nổi bật</a></span>
			</div>
			<div class="editors-pick-post">
				@foreach ($topPost as $tp)
				<div class="other-post">
					<img class="blue-bullet" src="./img/blue_bullet.jpg">
					<span class="other-title-post"><a href="{{ route('post.show',['cat_slug'=>$tp->getCategory->slug,'post_slug'=>$tp->slug]) }}">{{ $tp->title }}</a></span>
				</div>
				@endforeach
			</div>
		</div>
		<div class="single-sidebar-widget">
			<hr/>
			<ul>
				<a href="./gioi-thieu/cac-nganh-nghe-dao-tao.html"><li class="bg1"><img src="./img/sidebar/nganh_nghe.png" alt="" class="img-fluid">Các ngành, nghề đào tạo</li></a>
				<a href="#"><li class="bg2"><img src="./img/sidebar/hocphi_hocbong.png" alt="" class="img-fluid">Học phí & học bổng</li></a>
				<a href="{{ route('dang_ky') }}"><li class="bg1"><img src="./img/sidebar/tuyen_sinh.png" alt="" class="img-fluid">Đăng ký xét tuyển năm 2021</li></a>
				<a href="#"><li class="bg2"><img src="./img/sidebar/ho_so.png" alt="" class="img-fluid">Hồ sơ tuyển sinh</li></a>
				<a href="{{ route('album') }}"><li class="bg1"><img src="./img/sidebar/thu_vien.png" alt="" class="img-fluid">Thư viện hình ảnh</li></a>
				<a href="{{ route('bieumau') }}"><li class="bg2"><img src="./img/sidebar/vanban.png" alt="" class="img-fluid">Biểu mẫu, sổ sách</li></a>
			</ul>
		</div>
		<div class="single-sidebar-widget most-popular-widget">			
			<div class="category-title mb-2">	
				<span class="title-icon">
					<i class="fa fa-youtube-play" aria-hidden="true"></i>
				</span><span class="cat-title"><a href="#">Video</a></span>
			</div>			
			<img id="exampleImage" src="./img/sidebar/hieutruong.jpg" class="img-fluid"data-videourl="https://www.youtube.com/embed/BpNFhDOSTg0">
			<script src="./js/youtube-overlay.js"></script>
			<script>
				var img = $("#exampleImage");
				var configObject = {
					sourceUrl: img.attr("data-videourl"),
					triggerElement: "#" + img.attr("id"),
					progressCallback: function() {
						console.log("Callback Invoked.");
					}
				};
				var videoBuild = new YoutubeOverlayModule(configObject);
				videoBuild.activateDeployment();
			</script>
		</div>
		<div class="single-sidebar-widget most-popular-widget">
			<div class="category-title mb-2">	
				<span class="title-icon">
					<i class="fa fa-link" aria-hidden="true"></i>
				</span><span class="cat-title"><a href="#">Liên kết</a></span>
			</div>
			<div class="text-center">
				<a href="https://moet.gov.vn/" target="_blank"><img src="./img/lienket/bogiaoduc.jpg" class="img-fluid lienket"/></a>
				<a href="http://gdnn.gov.vn/" target="_blank"><img src="./img/lienket/gdnn.jpg" class="img-fluid lienket"/></a>
				<a href="http://gdnn.gov.vn/AIAdmin/FAQs.aspx" target="_blank"><img src="./img/lienket/luat_gdnn.jpg" class="img-fluid lienket"/></a>
				<a href="https://daotaocq.gdnn.gov.vn/" target="_blank"><img src="./img/lienket/dtao_cquy.jpg" class="img-fluid lienket"/></a>
				<a href="https://haiphong.edu.vn/" target="_blank"><img src="./img/lienket/so_gddtaoHP.jpg" class="img-fluid lienket"/></a>
			</div>
		</div>
	</div>
</div>