<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Tanaman </title>
    <link rel="shortcut icon" href="{{ asset('assets/front/') }}/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/colors/violet.css">
    <link rel="preload" href="{{ asset('assets/front/') }}/css/fonts/urbanist.css" as="style"
        onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
                <div class="container justify-content-between align-items-center">
                    <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
                        <div class="navbar-brand"><a href="./index.html">
                                <img class="logo-dark" src="{{ asset('assets/front/') }}/img/tanaman-logo-dark.png"
                                    srcset="{{ asset('assets/front/') }}/img/tanaman-logo-dark.png 2x" alt="" />
                                <img class="logo-light" src="{{ asset('assets/front/') }}/img/tanaman-logo-light.png"
                                    srcset="{{ asset('assets/front/') }}/img/tanaman-logo-light.png 2x" alt="" />
                            </a></div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.d-flex -->
                    <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
                        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                            <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                                <a href="{{ route('front') }}" class="transition-none d-none d-lg-flex"><img
                                        class="logo-dark" src="{{ asset('assets/front/') }}/img/tanaman-logo-dark.png"
                                        srcset="{{ asset('assets/front/') }}/img/tanaman-logo-dark.png 2x" alt="" />
                                    <img class="logo-light"
                                        src="{{ asset('assets/front/') }}/img/tanaman-logo-light.png"
                                        srcset="{{ asset('assets/front/') }}/img/tanaman-logo-light.png 2x"
                                        alt="" /></a>
                                <h3 class="text-white fs-30 mb-0 d-lg-none">Tanaman</h3>
                                <button type="button" class="btn-close btn-close-white d-lg-none"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.navbar-collapse-wrapper -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container pt-7 pb-7">
            <div class="row gx-lg-0 gy-6">
                <div class="col-lg-4">
                    <div class="widget">
                        <p class="lead mb-0">Kami percaya bahwa setiap tanaman adalah langkah kecil menuju dunia yang
                            lebih hijau dan sehat. Mari bersama-sama kita
                            tumbuhkan kehidupan dan sehatkan lingkungan kita.</p>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-lg-3 offset-lg-2">
                    <div class="widget">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-leaf fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Kontak</h5>
                                <p class="mb-0">(0251) 8321879 <br />(0251) 8327010</p>
                            </div>
                        </div>
                        <!--/div -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-lg-3">
                    <div class="widget">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-leaf fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i>
                                </div>
                            </div>
                            <div class="align-self-start justify-content-start">
                                <h5 class="mb-1">Alamat</h5>
                                <address>Jl. Tentara Pelajar No.3, Cimanggu, Bogor Barat, Kota Bogor, Jawa Barat, Indonesia 16111</address>
                            </div>
                        </div>
                        <!--/div -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
            <hr class="mt-11 mt-md-12 mb-7" />
            <div class="d-md-flex align-items-center justify-content-between">
                <p class="mb-2 mb-lg-0">© 2023 Tanaman.</p>
                <nav class="nav social social-muted mb-0 text-md-end">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
            </div>
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    @yield('js')
    <script src="{{ asset('assets/front/') }}/js/plugins.js"></script>
    <script src="{{ asset('assets/front/') }}/js/theme.js"></script>
</body>

</html>