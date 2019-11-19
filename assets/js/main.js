// materialize init
M.AutoInit();

$(document).ready(function () {
	// set parent class active when is current link
	$('a[href="'+location.href+'"]').parents('li').addClass('active');

	// set timeout for prereload page
	setTimeout(function() {
		$('.prereload').fadeOut();
	}, 100);

	// add class waves effect to all button
	$('.btn').addClass('waves-effect');
	$('.btn').addClass('waves-light');
});

// collapse for mobile sidebar
$(document).ready(function() {
  $('.sidenav').sidenav();
});

const alert = () => {
	let alert = document.querySelector('.alert');
	let button = document.createElement('button');

	button.setAttribute('class', 'waves-effect waves-light close-alert');
	button.setAttribute('type', 'button');
	button.innerHTML = '&times;';
	alert.appendChild(button);
}

// make close button for alert
if (document.querySelector('.alert')) {
	alert();
}

$('.close-alert').on('click', function() {
	let parents = $(this).parents('.alert');
	parents.hide();
});