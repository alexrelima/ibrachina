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

	var slide_wrp_header    = ".side-menu-wrapper_header"; //Menu Wrapper
	var open_button_header  = ".menu-open_header"; //Menu Open Button
	var close_button_header = ".menu-close_header"; //Menu Close Button
	var overlay_header      = ".menu-overlay_header"; //Overlay

	//Initial menu position
	$(slide_wrp_header).hide().css( {"right": -$(slide_wrp_header).outerWidth()+'px'}).delay(50).queue(function(){$(slide_wrp_header).show()}); 

	$(open_button_header).click(function(e){ //On menu open button click
		e.preventDefault();
	$(slide_wrp_header).css( {"right": "0px"}); //move menu right position to 0
	setTimeout(function(){
	    $(slide_wrp_header).addClass('active'); //add active class
	},50);
	$(overlay_header).css({"opacity":"1", "width":"100%"});
	});

	$(close_button_header).click(function(e){ //on menu close button click
		e.preventDefault();
	$(slide_wrp_header).css( {"right": -$(slide_wrp_header).outerWidth()+'px'}); //hide menu by setting right position 
	setTimeout(function(){
	    $(slide_wrp_header).removeClass('active'); // remove active class
	},50);
	$(overlay_header).css({"opacity":"0", "width":"0"});
	});

	$(document).on('click', function(e) { //Hide menu when clicked outside menu area
	if (!e.target.closest(slide_wrp_header) && $(slide_wrp_header).hasClass("active")){ // check menu condition
		$(slide_wrp_header).css( {"right": -$(slide_wrp_header).outerWidth()+'px'}).removeClass('active');
		$(overlay_header).css({"opacity":"0", "width":"0"});
	}
	});

	$('.placares').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		dots: true,
		autoplay: true,
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


	$('.owl-instalacoes').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		dots: true,
		autoplay: true,
		items:1,
		responsive:{
			0:{
			},
			600:{
				items:2,
			},
			1000:{
				items:3
			},
		}
	});



	
	$(".tab-opt ul li a").on('click', function (e) {
        e.preventDefault(); // prenvent default anchor behavier

        $(".tab-opt ul li").removeClass('active'); // remove ative class from all li elements
        $(this).parent().addClass('active'); // add active class to current clicked li element

        $(".tabs-content > div").hide(); // hide all content
        var hrefId = $(this).attr('href'); // get id from href attrbute of clicked anchor tag
        $(hrefId).show(); // show id's content        
    });

    $('.tab-opt li:first').addClass('active');

	

	


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