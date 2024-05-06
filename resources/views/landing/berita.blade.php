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



        </header>
		<!-- Header Main Area End Here -->

        <!-- Page Content -->
        <div class="page-content">   
            
        <!-- Blog Sortable Col 3 Start -->
		<section class="section-lgx pbmit-sortable-yes pbmit-blog-column-three">
			<div class="container">
				<div class="pbmit-sortable-list">
					<ul class="pbmit-sortable-list-ul">
					   <li><a href="#" class="pbmit-sortable-link pbmit-selected" data-sortby="*">All</a></li>
					   <li><a href="#" class="pbmit-sortable-link" data-sortby="cardiologist">Cardiologist</a></li>
					   <li><a href="#" class="pbmit-sortable-link" data-sortby="dentist">Dentist</a></li>
					   <li><a href="#" class="pbmit-sortable-link" data-sortby="neurologist">Neurologist</a></li>
					   <li><a href="#" class="pbmit-sortable-link" data-sortby="osteopaths">Osteopaths</a></li>
					   <li><a href="#" class="pbmit-sortable-link" data-sortby="physicians">Physicians</a></li>
					   <li><a href="#" class="pbmit-sortable-link" data-sortby="surgeon">Surgeon</a></li>
					</ul>
				</div>
				<div class="pbmit-element-posts-wrapper row multi-columns-row">
					<article class="pbmit-blog-style-1 cardiologist col-md-4">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="images/blog/blog-01.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-details.html">
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</a>
									<div class="pbmit-meta-cat-wrapper pbmit-meta-line">
										<div class="pbmit-meta-category">
											<a href="blog-classic.html" rel="category tag">Cardiologist</a>
										</div>
									</div>
									<a class="pbmit-link" href="blog-details.html"></a>
								</div>
								<div class="pbmit-category-date-wraper d-flex align-items-center">
									<div class="pbmit-meta-date-wrapper pbmit-meta-line">
										<div class="pbmit-meta-date">
											<span class="pbmit-post-date">
												<i class="pbmit-base-icon-calendar-3"></i>August  29. 2023
											</span>
										</div>
									</div>
									<div class="pbmit-meta-author pbmit-meta-line">
										<span class="pbmit-post-author">
											<i class="pbmit-base-icon-user-3"></i>admin
										</span>
									</div>
								</div>
								<div class="pbmit-content-wrapper">
									<h3 class="pbmit-post-title">
										<a href="blog-details.html">What’s the reason so many older adults aren’t active?</a>
									</h3>
								</div>
							</div>
						</div>
					</article>
					
				</div>
			</div>
		</section>
		<!-- Blog Sortable Col 3 End -->

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
          @include('layouts.landing-partial.script')

   </body>

<!-- Mirrored from xcare-demo.pbminfotech.com/html-demo/blog-sortable-col-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 05:31:30 GMT -->
</html>