$(function(){
	var skills = {
		duration: 1000,
		delay: 300,
		origin: 'top',
		reset: true,
		distance: 0,
		viewFactor: 0.5,
	};

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

	window.sr = ScrollReveal();
	window.sr = ScrollReveal();

	sr.reveal('.skill', skills, 200);
	sr.reveal('.case__item', cases);

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
		}, 1500);
	})
	closeCases.click(function(){
		cases.removeClass('active');
		landing.removeClass('cases--active');
		setTimeout(function() {
			body.removeClass('overflow--hidden');
		}, 1500);
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