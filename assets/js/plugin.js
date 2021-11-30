function slickSlider() {
	$('.slick-slider').not('.slick-initialized').slick({
		autoplay: true,
		arrows: false,
		fade: true,
		speed: 1000,
		infinite: true,
	});
}

slickSlider();