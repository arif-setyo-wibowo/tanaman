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
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
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
        <div class="container pb-13 pb-md-15">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14"
                data-image-src="{{ asset('assets/front/') }}/img/photos/bg13.jpg">
                <div class="card-body p-10 p-xl-12">
                    <div class="row text-center">
                        <div class="col-xl-11 col-xxl-9 mx-auto">
                            <h3 class="display-3 mb-8 px-lg-8 text-white">Tambah <span
                                    class="underline-3 style-2 yellow">tanaman</span> baru!</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="d-flex justify-content-center">
                        <span><a href="{{ route('dashboard') }}" class="btn btn-white rounded">Klik Disini</a></span>
                    </div>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
            <hr class="mt-13 mt-md-15 mb-7" />
            <div class="d-md-flex align-items-center justify-content-between">
                <p class="mb-2 mb-lg-0">© 2024 Tanaman.</p>
                <!-- /.social -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/front/') }}/js/plugins.js"></script>
    <script src="{{ asset('assets/front/') }}/js/theme.js"></script>
</body>

</html>