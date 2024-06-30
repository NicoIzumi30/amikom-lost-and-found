<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BrookWood</title>
	<link rel="icon" href="{{ asset('images') }}/logo.png" type="image/ico" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/all.min.css">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/slick.css">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/style.css">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/media-query.css">
</head>

<body>
	<script>
		let onboarding = localStorage.getItem('onboarding');
		if (onboarding !== null) {
			window.location.href = "{{ route('login') }}";
		}
	</script>
	<div class="site_content">
		<!-- Preloader Start -->
		<div class="loader-mask">
			<div class="loader">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- Preloader End -->
		<!-- Splashscreen Details Section Start -->
		<section id="splashscreen">
			<div class="splashscreen-overlay">
				<div class="container">
					<div class="splash_fullsection">
						<div class="splash_top">
							<div class="logo_sec">
								<a href="javascript:void(0)">
									<img src="{{'main/onboarding'}}/images/logo_amikom_full_color.png" alt="logo">
								</a>
							</div>
							<div class="logo_details">
								<h1>AMIKOM LOST AND FOUND</h1>
								<p>Temukan Barangmu Yang Hilang dan <br />Laporkan Barang Yang Kamu Temukan</p>
							</div>
						</div>
						<div class="splash_bottom">
							<a href="{{ route('onboarding') }}">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Splashscreen Details Section End -->
	</div>
	<script src="{{'main/onboarding'}}/js/jquery-min-3.6.0.js"></script>
	<script src="{{'main/onboarding'}}/js/slick.min.js"></script>
	<script src="{{'main/onboarding'}}/js/bootstrap.bundle.min.js"></script>
	<script src="{{'main/onboarding'}}/js/custom.js"></script>

</body>

</html>