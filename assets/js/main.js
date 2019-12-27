$(document).ready(function () {
	// set parent class active when is current link
	$('a[href="'+location.href+'"]').parents('li').addClass('active');
	$('#kegiatan').dataTable();
	$('.datepicker').datepicker();
});

$('#file').on('change', previewImage);

function previewImage() {
	const self = $('#file');
	const parent = self.prev();
	const icon = parent.children('i');
	const image = parent.children('img');
	const label = parent.children('label');
	let oFReader = new FileReader()
			oFReader.readAsDataURL(document.querySelector('#file').files[0]);

	oFReader.onload = e => {
		label.css('background', 'transparent');
		icon.hide();
		image.attr('src', e.target.result);
		image.show();
	}
}

$('#add_saldo').on('click', function(e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const checked = $('input:checked');
	const tr = checked.parents('tr');
	var data = [];

	tr.css('background', '#eeeeee');

	for (var i = 0; i < checked.length; i++) {
		data.push($(checked[i]).attr('data-id'));
	}
	window.location.href = href + '/' + data.join('-');
});

$(document).ready(function() {
	$('.type-data').hide();

	$('.' + $('input[type="radio"]:checked').attr('id')).show();

	$('input[type="radio"]').on('click', e => {
		$('.type-data').hide();
		const data = $('input[type="radio"]:checked').attr('id');
		$('.'+data).show();
	});
});

const nilaiValue = () => {
	var value, element,
			nilai = $('#nilai');
	if ($('.pemasukan-data').css('display') == 'block') {
		element = $('.pemasukan-data .form-group').children('.nilai');
	} else if ($('.input-manual').css('display') == 'block') {
		element = $('.input-manual .form-group').children('.nilai');
	}

	if ($(element).attr('id') == 'pemasukan') {
		value = $(element).children('option:selected').val();
	} else {
		value = $(element).val();
	}
	nilai.val(value);
};

$(document).on('click', () => {
	nilaiValue();
});

// new rupiahFormat('#jumlah').getValue();