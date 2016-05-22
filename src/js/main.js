$(function(){
	var skills = {
		duration: 1000,
		delay: 300,
		origin: 'top',
		reset: true,
		distance: 0,
		viewFactor: 0.5,
	}

	var cases = {
		duration: 500,
		delay: 200,
		origin: 'top',
		reset: false,
		distance: 0,
		scale: 1,
		viewFactor: 0.3,
		container: '.slide__section'
	}

	var caseDescription = {
		duration: 1000,
		delay: 300,
		origin: 'top',
		reset: true,
		distance: 0,
		viewFactor: 0.5,
	};

	window.sr = ScrollReveal();

	if($('.skill').length) {
		sr.reveal('.skill', skills, 200);
	}

	if($('.case__item').length) {
		sr.reveal('.case__item', cases);
	}

	if($('.case__description').length) {
		sr.reveal('.case__description', caseDescription);
	}

	var buttonAside = $('.button--aside'),
		buttonCases = $('.button--cases'),
		aside = $('aside'),
		landing = $('.landing'),
		body = $('body, html'),
		closeCases = $('.cases .button--close'),
		buttonMobile = $('.button-nav--mobile'),
		mobileNav = $('.mobile__nav'),
		cases = $('.cases');

	buttonAside.click(function(){
		aside.toggleClass('active');
	})

	buttonMobile.click(function(){
		mobileNav.toggleClass('active');
		$(this).toggleClass('active');
	})

	buttonCases.click(function(){
		cases.toggleClass('active');
		landing.addClass('cases--active');
		setTimeout(function() {
			body.addClass('overflow--hidden');
		}, 1000);
	})
	closeCases.click(function(){
		cases.removeClass('active');
		landing.removeClass('cases--active');
		setTimeout(function() {
			body.removeClass('overflow--hidden');
		}, 1000);
	})

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop(),
	    	nav = $('nav');

	    if (scroll >= 5) {
	        nav.addClass("scrolled");
	    } else {
	        nav.removeClass("scrolled");
	    }
	});

});