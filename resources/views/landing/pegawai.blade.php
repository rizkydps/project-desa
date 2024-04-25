<!doctype html>
<html class="no-js" lang="en">
   
  <head>
	@include('layouts.landing-partial.style')
      
	
   </head>
   <body>
      <!-- Page Wrapper -->
      <div class="page-wrapper">

        <!-- Header Main Area -->
        
        <!-- Header Main Area End Here -->
		<header class="site-header header-style-2">
			@include('layouts.landing-partial.navbar')

			
			
		</header>
        <!-- Title Bar -->
		{{--  <div class="pbmit-title-bar-wrapper">
			<div class="container">
				<div class="pbmit-title-bar-content">
					<div class="pbmit-title-bar-content-inner">
						<div class="pbmit-tbar">
							<div class="pbmit-tbar-inner container">
								<h1 class="pbmit-tbar-title"> Our Team Member</h1>
							</div>
						</div>
						<div class="pbmit-breadcrumb">
							<div class="pbmit-breadcrumb-inner">
								<span>
									<a title="" href="#" class="home"><span>Xcare</span></a>
								</span>
								<span class="sep">
									<i class="pbmit-base-icon-angle-double-right"></i>
								</span>
								<span><span class="post-root post post-post current-item"> Our Team Member</span></span>
							</div>
						</div>
					</div>
				</div>  
			</div> 
		</div>  --}}
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content"> 

			<!-- Team Start --> 
			<section class="section-lgx">
				<div class="container">
					<div class="row pbmit-element-posts-wrapper">
						@foreach($pegawais as $pegawai)
						<article class="pbmit-team-style-1 col-md-6 col-lg-3">
							<div class="pbminfotech-post-item">
								<div class="pbmit-featured-wrap">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('storage/img/pegawai/' . $pegawai->foto) }}" class="img-fluid" alt="">
											
										</div>
									</div>
									<div class="pbmit-team-btn">
										<a class="pbmit-team-text" href="#">
											<i class="pbmit-base-icon-share-1"></i>
										</a>
										<div class="pbminfotech-box-social-links">
											<ul class="pbmit-social-links pbmit-team-social-links">
												<li class="pbmit-social-li pbmit-social-facebook">
													<a href="#" title="Facebook" target="_blank">
														<span><i class="pbmit-base-icon-facebook-f"></i></span>
													</a>
												</li>
												<li class="pbmit-social-li pbmit-social-twitter">
													<a href="#" title="Twitter" target="_blank">
														<span><i class="pbmit-base-icon-twitter-2"></i></span>
													</a>
												</li>
												<li class="pbmit-social-li pbmit-social-instagram">
													<a href="#" title="Instagram" target="_blank">
														<span><i class="pbmit-base-icon-instagram"></i></span>
													</a>
												</li>
												<li class="pbmit-social-li pbmit-social-youtube">
													<a href="#" title="Youtube" target="_blank">
														<span><i class="pbmit-base-icon-youtube-play"></i></span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="pbminfotech-box-content">
									<div class="pbminfotech-box-content-inner">
										<div class="pbminfotech-box-team-position">{{ $pegawai->jabatan }}</div>
										<h3 class="pbmit-team-title">
											<a href="team-single-detail.html">{{ $pegawai->name }}</a>
										</h3>
									</div>
								</div>
							</div>
						</article>
						@endforeach
					</div>
				</div>
			</section>
			<!-- Team End --> 

        </div>
        <!-- Page Content End -->

		<!-- footer -->
		@include('layouts.landing-partial.footer')
		<!-- footer End -->
         
    </div>
    <!-- Page Wrapper End -->

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

<!-- Mirrored from xcare-demo.pbminfotech.com/html-demo/our-team-member.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 05:30:54 GMT -->
</html>