// materialize init
M.AutoInit();

$(document).ready(function () {
	// set parent class active when is current link
	$('a[href="'+location.href+'"]').parents('li').addClass('active');

	// set timeout for prereload page
	setTimeout(function() {
		$('.prereload').fadeOut();
	}, 100);
});

// collapse for mobile sidebar
$(document).ready(function(){
  $('.sidenav').sidenav();
});