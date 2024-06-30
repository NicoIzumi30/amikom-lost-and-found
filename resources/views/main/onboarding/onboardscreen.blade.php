<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amikom Lost and Found</title>
	<link rel="icon" href="{{ asset('images') }}/logo.png" type="image/ico" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/all.min.css">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/style.css">
	<link rel="stylesheet" href="{{'main/onboarding'}}/css/media-query.css">
</head>
<body	>
	<div class="site_content">
		<!-- Onboarding  Details Section Start -->
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators custom-slider-btn">
				<button type="button" id="first" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=" custom-slider-dots active " aria-current="true"></button>
				<button type="button"  id="second" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=" custom-slider-dots" ></button>
				<button type="button"  id="third" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=" custom-slider-dots" ></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item first_slide active ">
					<div class="Onboarding-Screen-1 slide1">
						<div class="container">
							<div class="Onboarding-Screen-1-full">
								<div class="main-header">
								</div>
								<div class="skip_btn_1 skip_btn">
									<button><a href="javascript:void(0)">Skip</a></button>
								</div>
								<div class="screen-1-content">
									<h1>Selamat Datang Di <div class="amikom">AMIKOM LOST AND FOUND</div></h1>
									<p>Cari dan temukan barangmu yang hilang.</p>	
								</div>
							</div>
						</div> 	
					</div>
				</div>
				<div class="carousel-item second_slide">
					<div class="Onboarding-Screen-1 slide2">
						<div class="container">
							<div class="Onboarding-Screen-1-full">
								<div class="main-header">
								</div>
								<div class="skip_btn_2 skip_btn">
									<a href="javascript:void(0)">Skip</a>
								</div>
								<div class="screen-1-content">
									<h1>Apa itu <div class="amikom">AMIKOM LOST AND FOUND?</div> </h1>
									<p>Website ini merupakan tempat untuk kalian </p>	
								</div>
							</div>
						</div> 	
					</div>
				</div>
				<div class="carousel-item third_slide">
					<div class="Onboarding-Screen-1 slide3">
						<div class="container">
							<div class="Onboarding-Screen-1-full">
								<div class="main-header">
								</div>
								<div class="skip_btn_3 skip_btn">
									<a href="{{route('login')}}" id="setLocalStorage">Skip</a>
								</div>
								<div class="screen-1-content">
									<h1>Create Real Inspiration</h1>
									<p>Posting barang yang kamu temukan dan bantu mereka yang kehilangan.</p>	
								</div>
							</div>
						</div> 	
					</div>
				</div>
			</div>
		</div>
		<!-- Onboarding  Details Section End -->
	</div>
	<script src="{{'main/onboarding'}}/js/jquery-min-3.6.0.js"></script>
	<script  src="{{'main/onboarding'}}/js/slick.min.js"></script>
	<script  src="{{'main/onboa	rding'}}/js/bootstrap.bundle.min.js"></script>
	<script  src="{{'main/onboarding'}}/js/custom.js"></script>
	
</body>
</html>

