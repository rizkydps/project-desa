<div class="container-fluid">
    <div class="pbmit-header-content d-flex justify-content-between align-items-center">
        <div class="pbmit-logo-menuarea d-flex align-items-center">
            <div class="site-branding">
                <h1 class="site-title">
                    <a href="/">
                        <img class="pbmit-sticky-logo" src="{{ asset ('landing/images/logo-politani-1-black.png') }}" alt="Yoge">
                    </a>
                </h1>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="site-navigation">
                <nav class="main-menu navbar-expand-xl navbar-light">
                    <div class="navbar-header">
                        <!-- Toggle Button --> 
                        <button class="navbar-toggler" type="button">
                            <i class="pbmit-base-icon-menu-1"></i>
                        </button>
                    </div>
                    <div class="pbmit-mobile-menu-bg"></div>
                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                        <div class="pbmit-menu-wrap">
                            <span class="closepanel">
                                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                    <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                                    <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                                </svg>
                            </span>
                            <ul class="navigation clearfix">
                                <li class="active">
                                    <a href="/">Home</a>
                                    
                                </li>
                                <li>
                                    <a href="/#profil">Profil</a>
                                <li><a href="/#layanan">Layanan</a></li>
                                <li><a href="/#aspira">Aspirasi dan Aduan</a></li>
                                <li><a href="{{ route('pegawai') }}">Perangkat Desa</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="pbmit-right-box d-flex align-items-center">
            <!-- <div class="pbmit-button-box">
                <div class="pbmit-header-button">
                    <a href="tel:+1(212)255-511">
                        <span class="pbmit-header-button-text-1">+1(212)255-511</span>		
                    </a>
                </div>
            </div> -->
            <div class="pbmit-header-search-btn">
                <a href="#" title="Search">
                    <i class="pbmit-base-icon-search-1"></i>
                </a>
            </div>
            @if (Auth::check())
    <a class="pbmit-btn" href="{{ route('dashboard.index') }}">
        <span class="pbmit-button-content-wrapper">
            <span class="pbmit-button-icon pbmit-align-icon-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                    <title>black-arrow</title>
                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                </svg>
            </span>
            <span class="pbmit-button-text">Dashboard</span>
        </span>
    </a>
@else
    <div class="pbmit-button-box-second">
        <a class="pbmit-btn" href="{{ route('login') }}">
            <span class="pbmit-button-content-wrapper">
                <span class="pbmit-button-icon pbmit-align-icon-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                        <title>black-arrow</title>
                        <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                        <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                        <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                    </svg>
                </span>
                <span class="pbmit-button-text">Login Admin</span>
            </span>
        </a>
    </div>
@endif

        </div>
    </div>
</div>