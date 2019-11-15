$(document).ready(function () {
	$('#table-one').DataTable();

	var localStorage = window.localStorage;
	if (!localStorage.getItem('active')) {
		localStorage.setItem('active', 'home');
	}

	var tabLink = $('#' + localStorage.getItem('active') + '-tab');

	$('#' + localStorage.getItem('active')).addClass('active show');
	tabLink.addClass('active');
});

$('.nav-link').css({
	'text-transform' : 'uppercase'
});

$('.nav-link').on('click', function () {
	var localStorage = window.localStorage;
	localStorage.removeItem('active');
	$('.nav-link').removeClass('active');
	$('.tab-pane').removeClass('active show');
	var tabLink = $(this).attr('id').split('-')[0];

	localStorage.setItem('active', tabLink);

	var tabTarget = $('#' + localStorage.getItem('active'));

	$('#' + localStorage.getItem('active') + '-tab').addClass('active');
	tabTarget.addClass('active show');
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});