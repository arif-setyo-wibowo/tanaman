@extends('template.template-front')
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
    data-image-src="{{ asset('assets/front/') }}/img/photos/bg13.jpg">
    <div class="container pt-17 pt-md-18 text-center">
        <div class="row">
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0">Tumbuhkan Kehidupan, <span
                        class="underline-3 style-2 yellow">Sehatkan</span>
                    Lingkungan
                </h1>
                <p class="lead fs-20 text-white lh-sm mb-5 mx-md-7">Kami percaya bahwa setiap tanaman
                    adalah langkah kecil menuju dunia yang lebih hijau dan sehat. Mari bersama-sama kita
                    tumbuhkan kehidupan dan sehatkan lingkungan kita.</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
        <div class="divider text-light mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
            </svg>
        </div>
    </div>
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="grid grid-view projects-masonry shop mb-13">
            <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                <div class="project item col-md-4 col-xl-3">
                    <figure class="rounded mb-6">
                        <img src="{{ asset('assets/front') }}/img/photos/sh1.jpg"
                            srcset="{{ asset('assets/front') }}/img/photos/sh1@2x.jpg 2x" alt="" />
                        <a href="{{ route('detail') }}" class="item-cart"><i class="uil uil-flower"></i> Lihat Detail
                            Tanaman</a>
                    </figure>
                    <div class="post-header">
                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                            <div class="post-category text-ash mb-0">Nama Latin</div>
                        </div>
                        <h2 class="post-title h3 fs-22"><a href="{{ route('detail') }}" class="link-dark">Nama
                                Lokal</a></h2>
                    </div>
                    <!-- /.post-header -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.grid -->
        <nav class="d-flex justify-content-center" aria-label="pagination">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                    </a>
                </li>
            </ul>
            <!-- /.pagination -->
        </nav>
        <!-- /nav -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection