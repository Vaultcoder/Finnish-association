// @author Dennis Grundberg

$(document).ready(function() {

	$(window).load(function() {
		$('.main').css({'opacity':'1', '-webkit-transform':'scale(1)', '-moz-transform':'scale(1)', '-ms-transform':'scale(1)', '-o-transform':'scale(1)'});
	});
	
	$('.back-up').stop().animate({
		scrollTop: 0 
	});

	// if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
	// window.onmousewheel = document.onmousewheel = wheel;

	// function wheel(event) {
	// 	var delta = 0;
	// 	if (event.wheelDelta) delta = event.wheelDelta / 120;
	// 	else if (event.detail) delta = -event.detail / 3;

	// 	handle(delta);
	// 	if (event.preventDefault) event.preventDefault();
	// 	event.returnValue = false;
	// }

	// function handle(delta) {
	// 	var time = 60;
	// 	var distance = 100;

	$(window).scroll(function() {

		// För att gömma menyknappar!
		if ($(this).scrollTop() < 100) {
			$('.header').css({'opacity':'1'});
			$('a#buttonText1').css({'cursor':'pointer'});
			$('a#buttonText2').css({'cursor':'pointer'});
			$('a#buttonText3').css({'cursor':'pointer'});
		}
		else {
			$('.header').css({'opacity':'0'});
			$('a#buttonText1').css({'cursor':'default'});
			$('a#buttonText2').css({'cursor':'default'});
			$('a#buttonText3').css({'cursor':'default'});
		}

		// Till toppen
		if ($(this).scrollTop() < 100) {
			$('.back-up').css({'opacity':'0'});
		} 
		else {
			$('.back-up').css({'opacity':'1'});
		}
	});
});

