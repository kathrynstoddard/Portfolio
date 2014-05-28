$(function (){

	$('#websites').on('click', function() {
		$('.websites').removeClass('hide');
		$('.webapps').addClass('hide');
	});

	$('#webapps').on('click', function() {
		$('.websites').addClass('hide');
		$('.webapps').removeClass('hide');
	});

	$('#all').on('click', function() {
		$('.websites').removeClass('hide');
		$('.webapps').removeClass('hide');
	});

	$('.grid-block').hover(
		function () {
			$(this).find('.caption').slideDown(200);
		},
		function () {
			$(this).find('.caption').slideUp(200);
		}
	);

});