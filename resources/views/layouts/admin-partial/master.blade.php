<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.admin-partial.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.admin-partial.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layouts.admin-partial.navbar')
                
                <!-- Begin Page Content -->
                

                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
           @include('layouts.admin-partial.footer')
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.admin-partial.modal')

    @include('layouts.admin-partial.script')
</body>

</html>