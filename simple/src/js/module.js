$(function(){
	/*================================================
	back to top
	================================================*/
	$('.scroll-to-top').hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('.scroll-to-top').fadeIn();
		}else{
			$('.scroll-to-top').fadeOut();
		}
	});
	$('.scroll-to-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 200);
		return false;
	});

	/*================================================
	form input style
	================================================*/
	$('form input[type="text"], input[type="email"], form textarea').addClass('form-control');

	/*================================================
	nav fix
	================================================*/
	var nav    = $('.navbar'),
			offset = nav.offset();
			marginTop = $('header .container .row').height();

	$(window).scroll(function () {
		if($(window).scrollTop() > offset.top) {
			nav.addClass('fixed');
			$('#content').css('marginTop', marginTop + 50);
		} else {
			nav.removeClass('fixed');
			$('#content').attr('style', '')
		}
	});

});