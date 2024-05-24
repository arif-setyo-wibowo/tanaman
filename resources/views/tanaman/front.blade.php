@extends('template.template-front')
@section('content')
<section class="wrapper bg-light">
    <div class="swiper-container swiper-thumbs-container swiper-fullscreen nav-dark" data-margin="0"
        data-autoplay="true" data-autoplaytime="5000" data-nav="false" data-dots="false" data-items="1"
        data-thumbs="true">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="{{ asset('assets/front/') }}/img/photos/bg28.jpg"></div>
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="{{ asset('assets/front/') }}/img/photos/bg29.jpg"></div>
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="{{ asset('assets/front/') }}/img/photos/bg30.jpg"></div>
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="{{ asset('assets/front/') }}/img/photos/bg31.jpg"></div>
            </div>
            <!--/.swiper-wrapper -->
        </div>
        <div class="swiper swiper-thumbs">
        </div>
        <!-- /.swiper -->
        <div class="swiper-static">
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto mt-n10 text-center">
                        <h2 class="display-1 fs-60 text-white mb-0">
                            Tumbuhkan Kehidupan, Sehatkan <span class="typer text-leaf" data-loop="false"
                                data-delay="100" data-words="Lingkungan.">
                            </span><span class="cursor text-leaf" data-owner="typer"></span></h2>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.swiper-static -->
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
            </div>
            <!--/column -->
        </div>
        <div class="row gx-lg-4 gx-xl-6">
            <!--/column -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div id="accordion-3" class="accordion-wrapper">
                    <div class="card accordion-item shadow-lg">
                        <div class="card-header" id="accordion-heading-3-1">
                            <button class="collapsed text-center" data-bs-toggle="collapse"
                                data-bs-target="#accordion-collapse-3-1" aria-expanded="false"
                                aria-controls="accordion-collapse-3-1">1995</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1"
                            data-bs-target="#accordion-3">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                    massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis
                                    natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed
                                    odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.accordion-wrapper -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
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
<section class="wrapper bg-leaf">
    <div class="container py-5 py-md-8">
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