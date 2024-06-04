$(window).load(function(){

	if ($('html').is(':lang(pt-BR)')) {
		$("body").addClass("pt-version");
		$("body").removeClass("us-version");
	}

	if ($('html').is(':lang(en-us)')) {
		$("body").addClass("us-version");
		$("body").removeClass("pt-version");
	}

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



	

	

	


	var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
		onKeyPress: function(val, e, field, options) {
			field.mask(SPMaskBehavior.apply({}, arguments), options);
		},
	};
	$(".fullphone").mask(SPMaskBehavior, spOptions);


	if ($(window).width() < 992) {
		
	}

	if ($(window).width() < 768) {
		

	} else {
		var img = $(".sobre img");
		$(".sobre").css({height:img.height()});
	}
});

$(window).resize(function(){
	if ($(window).width() < 992) {
		

	} else{ 
		
	}

	if ($(window).width() < 768) {
		
		
		
	}else{
		
		
		
	}
});