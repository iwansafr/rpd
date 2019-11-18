M.AutoInit();

$(document).ready(function () {
	$('#table-one').DataTable();

	var localStorage = window.localStorage;
	if (!localStorage.getItem('active')) {
		localStorage.setItem('active', 'view');
	}

	$('.tab[href="#'+localStorage.getItem('active')+'"]').addClass('active');

	setTimeout(function() {
		$('.prereload').fadeOut();
	}, 100); 
});

$(document).ready(function(){
  $('.sidenav').sidenav();
});

$('.tab').on('click', () => {
	let localStorage = window.localStorage;

	$('.tab').removeClass('active');
	$(this).addClass('active');
	localStorage.setItem('active', $(this).attr('href'));
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});