// JS for Work examples
$(function (){

	$('#websites').on('click', function() {
		$('.websites').removeClass('hide');
		$('.coursera').addClass('hide');
	});

	$('#coursera').on('click', function() {
		$('.websites').addClass('hide');
		$('.coursera').removeClass('hide');
	});

	$('#all').on('click', function() {
		$('.websites').removeClass('hide');
		$('.coursera').removeClass('hide');
	});

	$('.slide').hover(
		function () {
			$(this).find('.caption_work').slideDown(200);
		},
		function () {
			$(this).find('.caption_work').slideUp(200);
		}
	);

});

// JS for jumbotron
$(function() {
	var pathname = window.location.pathname;
	if(pathname != '/index.php') {
		$('.jumbotron').addClass('contact-jumbotron');
	}
});
