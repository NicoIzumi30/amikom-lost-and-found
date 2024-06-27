
// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure',
		text: "Data will be deleted!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#e74c3c',
		cancelButtonColor: '#3085d6',
		cancelButtonText: 'Cance',
		confirmButtonText: 'Delete'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});



// tombol-hapus
$('.reset').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure',
		text: "Password will be reset!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#e74c3c',
		cancelButtonColor: '#3085d6',
		cancelButtonText: 'Cancel',
		confirmButtonText: 'Reset'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});


