// Sweet Alert
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire(
		'Sukses',
		'Data Berhasil ' + flashData,
		'success'
	)
}

const flashGagal = $('.flash-data-gagal').data('flashdata');

if (flashGagal) {
	Swal.fire(
		'Failed',
		'Data Gagal ' + flashGagal,
		'error'
	)
}


// tombol-hapus
$('#isitable').on("click", ".tombol-hapus",function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin',
		text: "data akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#e74c3c',
		cancelButtonColor: '#3085d6',
		cancelButtonText: 'Kembali',
		confirmButtonText: 'Hapus'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin',
		text: "data akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#e74c3c',
		cancelButtonColor: '#3085d6',
		cancelButtonText: 'Kembali',
		confirmButtonText: 'Hapus'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});



