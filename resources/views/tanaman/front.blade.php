@extends('template.template-front')
@section('content')
<section class="wrapper bg-light">
    <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000"
        data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="{{ asset('uploads/' . $slider[0]->slider)}}">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                                <h2
                                    class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    {{ $slider[0]->judul}}
                                </h2>
                                <p
                                    class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    {{ $slider[0]->deskripsi}}
                                </p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="{{ asset('uploads/' . $slider[1]->slider)}}">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                                <h2
                                    class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    {{ $slider[1]->judul}}
                                </h2>
                                <p
                                    class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    {{ $slider[1]->deskripsi}}
                                </p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="{{ asset('uploads/' . $slider[2]->slider)}}">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                                <h2
                                    class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    {{ $slider[2]->judul}}
                                </h2>
                                <p
                                    class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    {{ $slider[2]->deskripsi}}
                                </p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
</section>

<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pt-6 pb-5 pb-md-5">
        <div class="row mt-10">
            <div class="col-lg-12 col-xl-10 col-xxl-7 mx-auto text-center">
                <img src="{{asset('assets/front/')}}/img/icons/lineal/earth.svg"
                    class="svg-inject icon-svg icon-svg-md text-leaf" alt="" />
                <h2 class="display-5 text-center mt-2 mb-10">Sejarah</h2>
                <li class="list-group-item">
                    (1817) - Land Platentuin Buitenzorg<br>
                    (1876) - Cultuurtuin<br>
                    (1945) - Saibai Gizutsu-Bu (Balai Budidaya Tanaman) <br>
                    (1946) - BPTP (Balai Penyelidikan Tanaman Pertanian) <br>
                    (1961) - LPTS (LP Tanaman Serat dan Tanaman Industri Lainnya)<br>
                    (1966) - LPTI (Lembaga Penelitian Tanaman Industri)<br>
                    (1978) - Pusat Penelitian dan Pengembangan Tanaman Industri <br>
                    (1980) - Balittri Bogor<br>
                    (1984) - Balittro (Rempah & Obat) <br>
                    (1998) - Balittro (Rempah & Obat) – Departemen Kehutanan dan Perkebunan <br>
                    (2001) - Balittro (Rempah & Obat) – Departemen Pertanian <br>
                    (2003) - Balittro (Obat & Aromatik) – Departemen Pertanian<br>
                    (2012) - Balittro (Rempah & Obat) – Kementerian Pertanian <br>
                    (2023) - Balai Pengujian Standardisasi Instrumen Tanaman Rempah Obat dan Aromatik – Kementerian Pertanian<br>
                </li>
            </div>
            <!--/column -->
        </div>
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
        <div class="divider text-leaf mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="currentColor"
                    d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
            </svg>
        </div>
    </div>
    <!-- /.overflow-hidden -->
</section>
<style>
    .project figure img {
        width: 100%;
        height: 180px !important;
        object-fit: cover;
        object-position: center;
    }
</style>
<section class="wrapper bg-leaf">
    <div class="container py-5 py-md-8">
        <div class="grid grid-view projects-masonry shop mb-13">
            <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                @foreach ($gambar as $item)
                    <div class="project item col-md-4 col-xl-3">
                        <figure class="rounded mb-6">
                            <img style="height: unset;" src="{{ asset('uploads/' . $item->path) }}"
                                srcset="{{ asset('uploads/' . $item->path) }}" alt="" />
                            <a href="{{ route('detail', $item->id) }}" class="item-cart">
                                <i class="uil uil-flower"></i> Lihat Detail {{ $item->tanaman->nama_lokal}}
                            </a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0 text-white">{{ $item->tanaman->nama_latin}}</div>
                            </div>
                            <h2 class="post-title h3 fs-22">
                                <a href="{{ route('detail', $item->id) }}"
                                    class="link-dark">{{ $item->tanaman->nama_lokal}}</a>
                            </h2>
                        </div>
                        <!-- /.post-header -->
                    </div>

                @endforeach
            </div>
            <!-- /.row -->
        </div>
        <!-- /.grid -->
        <nav class="d-flex justify-content-center" aria-label="pagination">
            <ul class="pagination">
                <!-- Previous Page Link -->
                @if ($gambar->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $gambar->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                        </a>
                    </li>
                @endif

                <!-- Pagination Elements -->
                @foreach ($gambar->links()->elements[0] as $page => $url)
                    @if ($page == $gambar->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                <!-- Next Page Link -->
                @if ($gambar->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $gambar->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>

        <!-- /nav -->
    </div>
    <div class="overflow-hidden">
        <div class="divider text-light mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="currentColor"
                    d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
            </svg>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection