@extends('layouts.master')
@section('head.title')
Trường Cao đẳng Kinh tế và Công nghệ thực phẩm
@stop
@section('body.content')
<!-- Start latest-post Area -->
@foreach ($globalCat as $cat)
<div class="latest-post-wrap">
	<div class="category-title">
		<span class="title-icon">
			<i class="fa fa-newspaper-o" aria-hidden="true"></i>
		</span><span class="cat-title"><a href="{{ route('category.show',$cat->slug) }}">{{ $cat->name }}</a></span>
	</div>
	<div class="single-latest-post row">
		<div class="col-lg-6 post-left text-justify">
			<a href="{{ route('post.show',['cat_slug'=>$cat->slug,'post_slug'=>$cat->latestPost->slug]) }}">
				<div class="feature-img relative mb-2">
					<img class="img-fluid" src="{{ asset('/') . $cat->latestPost->thumbnail }}" alt="">
				</div>				
				<h4>{{ $cat->latestPost->title }}</h4>
			</a>
			<p class="excert">
				{{ $cat->latestPost->introtext }}
			</p>
		</div>
		<div class="col-lg-6 post-right text-justify">
			@foreach ($cat->getOtherPost as $post)	
			<div class="other-post">
				<img class="blue-bullet" src="./img/blue_bullet.jpg">
				<span class="other-title-post"><a href="{{ route('post.show',['cat_slug'=>$cat->slug,'post_slug'=>$post->slug]) }}">{{ $post->title }}</a></span>
			</div>
			@endforeach
		</div>		
		<div class="col-lg-12 xem-tiep text-right"><a href="{{ route('category.show',$cat->slug) }}">Xem tiếp ></a></div>
	</div>	
</div>
@endforeach
<!-- End latest-post Area -->

<!-- Start banner-ads Area -->
<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
	<a href="http://nhagiao.gdnn.gov.vn/" target="_blank"><img class="img-fluid" src="img/banner-ad.jpg"></a>
</div>
<!-- End banner-ads Area -->

<!-- Start relavent-story-post Area -->
<div class="latest-post-wrap">
	<div class="category-title">
		<span class="title-icon">
			<i class="fa fa-folder-open-o" aria-hidden="true"></i>
		</span><span class="cat-title"><a href="{{ route('vanban') }}">VĂN BẢN MỚI</a></span>
	</div>
	<div class="single-latest-post row">
		<div class="col-lg-6 post-left text-justify">
			<?php
			$i = 1;
			?>
			@foreach ($vanban as $vanban_l)
			<?php
			$i++;
			?>	
			<div class="other-post">
				<img class="blue-bullet" src="./img/blue_bullet.jpg">
				<span class="other-title-post"><a href="{{ $vanban_l->url }}" target="_blank">
					{{ $vanban_l->limit_name }}</a></span>
			</div>
			<?php
			if ($i > 3) break;
			?>				
			@endforeach
		</div>
		<div class="col-lg-6 post-right text-justify d-md-block d-none"> <!-- Màn hình to mới hiển thị cột này -->
			<?php
			$i = 1;
			?>
			@foreach ($vanban as $vanban_r)
			<?php
			$i++;
			if ($i <= 4) continue;
			?>
			<div class="other-post">
				<img class="blue-bullet" src="./img/blue_bullet.jpg">
				<span class="other-title-post"><a href="{{ $vanban_r->url }}" target="_blank">{{ $vanban_r->limit_name }}</a></span>
			</div>		
			@endforeach
		</div>		
		<div class="col-lg-12 xem-tiep text-right"><a href="{{ route('vanban') }}">Xem tiếp ></a></div>
	</div>	
</div>
<!-- End relavent-story-post Area -->
@stop
@section('footer.sms')
<a href="{{ route('lien_he') }}" class="offline_sms">
	<i class="fa fa-commenting-o" aria-hidden="true"></i>
	<span>Để lại tin nhắn cho chúng tôi!</span>
</a>   
@stop