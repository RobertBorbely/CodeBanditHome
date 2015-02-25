$(document).ready(function() {
	$('#first').fadeIn(1500).css({display: 'table',position: 'absolute'});
	$('#home').click(function (e){
		var currentActivePage = $('.page-active');
		var nextActivePage = $('#home-page');
		var currentActiveLink = $('.active');

		currentActivePage.hide('fade',500).switchClass('page-active','page-hidden');
		nextActivePage.delay(500).show('fade',500).switchClass('page-hidden', 'page-active');

		currentActiveLink.removeClass('active');
		$(this).addClass('active');

		$('.mastfoot').show();

		e.preventDefault();
	});

	$('#portfolio').click(function (e){
		var currentActivePage = $('.page-active');
		var nextActivePage = $('#portfolio-page');
		var currentActiveLink = $('.active');

		currentActivePage.hide('fade',500).switchClass('page-active','page-hidden');
		nextActivePage.delay(500).show('fade',500).switchClass('page-hidden', 'page-active');

		currentActiveLink.removeClass('active');
		$(this).addClass('active');

		$('.mastfoot').show();

		e.preventDefault();
	});

	$('#about').click(function (e){
		var currentActivePage = $('.page-active');
		var nextActivePage = $('#about-page');
		var currentActiveLink = $('.active');

		currentActivePage.hide('fade',500).switchClass('page-active','page-hidden');
		nextActivePage.delay(500).show('fade',500).switchClass('page-hidden', 'page-active');

		currentActiveLink.removeClass('active');
		$(this).addClass('active');

		$('.mastfoot').hide();

		e.preventDefault();
	});

	/*var divs = $('.social');
	var point = false;
	var counter = 0;
	$(window).scroll(function(){
		if($(window).scrollTop()<250){
			divs.fadeIn("slow", function() {
				$('.jspoint').switchClass('col-md-12', 'col-md-6');
			});
		} else {
			divs.fadeOut("slow", function () {
				$('.jspoint').switchClass('col-md-6', 'col-md-12');
			});
		}

	});*/
});
