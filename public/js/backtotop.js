$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1000) {
			$('.scrollup').fadeIn();
			$('.right-controls').fadeIn();
		} else {
			$('.scrollup').fadeOut();
			$('.right-controls').fadeOut();
		}
	});
	$('.scrollup').click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 700);
		return false;
	});
});