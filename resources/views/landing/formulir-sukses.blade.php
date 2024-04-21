<!doctype html>
<html class="no-js" lang="en">
	
<head>
	@include('layouts.landing-partial.style')
    <style>
        .form-container {
            display: none;
        }
    </style>
</head>

	<body>

	<!-- page wrapper -->
	<div class="page-wrapper pbmit-bg-color-light">

		<!-- Header Main Area -->
		<header class="site-header header-style-2">
			@include('layouts.landing-partial.navbar')
			
			
			
		</header>
		<!-- Header Main Area End Here -->

		<!-- page content -->
		<div class="page-content">

			
            <section class="section-xl">
				<div class="container">
					<div class="pbmit-heading-subheading text-center">
						
						
                       
					</div>


					<div class="appointment_box">
                        <h2 class="pbmit-title"> Formulir Sukses Dikirim </h2>
                        <h4 class="text-center mb-3">Silahkan Menunggu Konfirmasi Dari Admin Melalui WhatsApp <br> Terima Kasih</h4>
                        <a href="/" class="btn btn-success">Halaman Utama</a>
					</div>


				</div>
			</section>

			

		</div>
		<!-- page content End -->

		<!-- footer -->
		@include('layouts.landing-partial.footer')
        
		<!-- footer End -->

	</div>
	<!-- page wrapper End -->

	<!-- Search Box Start Here -->
	<div class="pbmit-search-overlay">
		<div class="pbmit-icon-close">
			<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
				<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
				<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
			</svg>
		</div>
		<div class="pbmit-search-outer"> 
			<form class="pbmit-site-searchform">
				<input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
				<button type="submit"></button>
			</form>
		</div>
	</div>
	<!-- Search Box End Here -->

	<!-- Scroll To Top -->
	<div class="pbmit-progress-wrap">
		<svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
		</svg>	
	</div>
	<!-- Scroll To Top End -->
	
	<!-- JS
		============================================ -->
	<!-- jQuery JS -->

	@include('layouts.landing-partial.script')

	</body>

</html>