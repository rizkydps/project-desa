<!doctype html>
<html class="no-js" lang="en">
	
<head>
	@include('layouts.landing-partial.style')
</head>

	<body>

	<!-- page wrapper -->
	<div class="page-wrapper pbmit-bg-color-light">

		<!-- Header Main Area -->
		<header class="site-header header-style-2">
			@include('layouts.landing-partial.navbar')
			@include('layouts.landing-partial.hero')
			
			
		</header>
		<!-- Header Main Area End Here -->

		<!-- page content -->
		<div class="page-content">

			

			<!-- About Us Start --> 
			@include('layouts.landing-partial.about')
			<!-- About Us end --> 

			<!-- Marquee Start --> 
            <section>
				<div class="container-fluid p-0">
					<div class="swiper-slider marquee">
						<div class="swiper-wrapper">
							<!-- Slide1 -->
							<div class="swiper-slide">
								<article class="pbmit-marquee-effect-style-1">
									<div class="pbmit-tag-wrapper">
										<h2 class="pbmit-element-title" data-text="Layanan">
											Layanan
										</h2>
									</div>
								</article>
							</div>
							<!-- Slide2 -->
							<div class="swiper-slide">
								<article class="pbmit-marquee-effect-style-1">
									<div class="pbmit-tag-wrapper">
										<h2 class="pbmit-element-title" data-text="Administrasi">
											Administrasi
										</h2>
									</div>
								</article>
							</div>
							<!-- Slide3 -->
							<div class="swiper-slide">
								<article class="pbmit-marquee-effect-style-1">
									<div class="pbmit-tag-wrapper">
										<h2 class="pbmit-element-title" data-text="Pengaduan">
											Pengaduan
										</h2>
									</div>
								</article>
							</div>
							<!-- Slide4 -->
							<div class="swiper-slide">
								<article class="pbmit-marquee-effect-style-1">
									<div class="pbmit-tag-wrapper">
										<h2 class="pbmit-element-title" data-text="Informasi">
											Informasi
										</h2>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
            </section>
            <!-- Marquee End -->

			

			<!-- Tab Start --> 
			@include('layouts.landing-partial.tabList')
			<!-- Tab End -->

			
			
			<!-- Blog Start -->
			@include('layouts.landing-partial.blog')
			<!-- Blog End -->

			<!-- Make An Appointment Start -->
			@include('layouts.landing-partial.comment')
			<!-- Make An Appointment End --> 

		
			<!-- Inner Box Start --> 
			@include('layouts.landing-partial.box')
			<!-- Inner Box end --> 
			

			

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