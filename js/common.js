/*** Put your javascript functions here ***/

$( document ).ready(function() {

    $('body').fadeIn();
	
	$('nav.main-menu > a').click(function() {
		$('body').fadeOut();
	});
});