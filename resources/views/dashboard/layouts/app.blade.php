<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layouts.partials._head')

</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="../assets/img/logo-small.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                @include('dashboard.layouts.partials._sidebar')

            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            @include('dashboard.layouts.partials._navbar')

            <!-- End Navbar -->
            <div class="content">
                @yield('content')
            </div>


            <footer class="footer footer-black  footer-white ">
                @include('dashboard.layouts.partials._footer')

            </footer>
        </div>
    </div>
    @include('dashboard.layouts.partials._js')
</body>

</html>
