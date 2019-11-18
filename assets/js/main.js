M.AutoInit();

$(document).ready(function () {
	$('a[href="'+location.href+'"]').parents('li').addClass('active');

	var localStorage = window.localStorage;
	if (!localStorage.getItem('active')) {
		localStorage.setItem('active', 'view');
	}

	$('.tab').children('a[href="#'+localStorage.getItem('active')+'"]').addClass('active');

	setTimeout(function() {
		$('.prereload').fadeOut();
	}, 100);
});

$(document).ready(function(){
  $('.sidenav').sidenav();
});

$('.tab').on('click', function(e) {
	let localStorage = window.localStorage;
	let item = $(this).attr('class');

	$('.tab').removeClass('active');
	$(this).addClass('active');
	localStorage.setItem('active', $(this).children('a').attr('href').substring(1));
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});