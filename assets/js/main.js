$(function (){

	$('#websites').on('click', function() {
		$('.websites').removeClass('hide');
		$('.webapps').addClass('hide');
		console.log('this is at least running');
	});

	$('#webapps').on('click', function() {
		$('.websites').addClass('hide');
		$('.webapps').removeClass('hide');
		console.log('this is at least running');
	});

	$('#all').on('click', function() {
		$('.websites').removeClass('hide');
		$('.webapps').removeClass('hide');
		console.log('this is at least running');
	});

});