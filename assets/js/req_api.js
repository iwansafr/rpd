$(document).ready(function() {
	$.ajax({
		url: 'http://api.rajaongkir.com/starter/city',
		type: 'GET',
		headers: {
      'Access-Control-Allow-Origin': '*'
    },
    contentType: "application/json",
		dataType: 'jsonp',
		success: function(data) {
			console.log(data);
		},
		error: function(data) {
			console.error(data);
		}
	});
});