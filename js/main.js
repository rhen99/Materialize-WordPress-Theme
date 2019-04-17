$(document).ready(function() {
	$('.nav-item-dropdown-button').dropdown({ constrainWidth: true });
	$('.side-menu-nav-item-dropdown-button').dropdown({ constrainWidth: false });
	$('.button-collapse').sideNav();

	$('#action').on('click', function() {
		const main = $('#main-area').position().top;

		$('html, body').animate(
			{
				scrollTop: main
			},
			500
		);
	});
});
