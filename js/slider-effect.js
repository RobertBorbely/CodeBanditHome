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

		e.preventDefault();
	});

	setTimeout(fade_out, 5000);

	function fade_out(){
		$("#alert").fadeOut().empty();
	};
});
