function slickSlider() {
	$('.slick-slider').not('.slick-initialized').slick({
		autoplay: true,
		arrows: false,
		fade: true,
		speed: 1500,
		infinite: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false
	});
}

slickSlider();