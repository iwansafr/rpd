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

new rupiahFormat('#jumlah').getValue();