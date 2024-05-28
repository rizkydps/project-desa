<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Desa SidoMulyo<sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('dashboard.pegawai.index')}}">Data Pegawai</a>
                        <a class="collapse-item" href="{{ route('dashboard.users.index')}}">Data Pengguna</a>
                        <a class="collapse-item" href="{{ route('kategori-surat.index') }}">Kategori Surat</a>
                        <a class="collapse-item" href="{{ route('dashboard.nomor_surat.index') }}">Nomer Surat</a>


                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.permintaan.index')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Filter Surat Masuk</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kasi Pemerintahan
            </div>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.surat.index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar Permintaan Surat</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->