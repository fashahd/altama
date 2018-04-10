
	$('.slickslider').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		dots: true,
		infinite: true,
		cssEase: 'linear',
			arrows: true,
		responsive: [
			{
				breakpoint: 980, // tablet breakpoint
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 480, // mobile breakpoint
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	});