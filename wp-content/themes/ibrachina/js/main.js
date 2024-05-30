$(window).load(function(){
	
});

$(function() {

	$('.placares').owlCarousel({
		loop:false,
		margin:0,
		nav:false,
		dots: true,
		autoplay: false,
		items:1,
		responsive:{
			0:{
			},
			600:{
			},
			1000:{
			},
		}
	});

	var img = $(".sobre img");
	$(".sobre").css({height:img.height()});


	var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
		onKeyPress: function(val, e, field, options) {
			field.mask(SPMaskBehavior.apply({}, arguments), options);
		},
	};
	$(".fullphone").mask(SPMaskBehavior, spOptions);
});