@extends('template.template-front')
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
    data-image-src="{{ asset('assets/front/') }}/img/photos/bg13.jpg">
    <div class="container pt-12 pt-md-12 text-center">
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
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-8">
            <div class="col-lg-4">
                <div class="swiper-container swiper-thumbs-container" data-margin="10" data-dots="false"
                    data-nav="false" data-thumbs="false">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure class="rounded"><img src="{{ asset('assets/front/') }}/img/photos/sh1.jpg"
                                        srcset="{{ asset('assets/front/') }}/img/photos/sh1@2x.jpg 2x" alt="" /><a
                                        class="item-link" href="{{ asset('assets/front/') }}/img/photos/sh1@2x.jpg"
                                        data-glightbox data-gallery="product-group"><i
                                            class="uil uil-focus-add"></i></a></figure>
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /column -->
            <div class="col-lg-8">
                <div class="post-header mb-5">
                    <h2 class="post-title display-5"><a href="./shop-product.html" class="link-dark">Nama Lokal</a></h2>
                    <p class="price fs-20 mb-2"><span class="amount">Nama Latin</span></p>
                </div>
                <!-- /.post-header -->
                <p class="mb-6">{nama_lokal} atau yang dikenal dengan nama latin {nama_latin} merupakan tanaman dari
                    famili {nama_famili} yang berasal dari {asal}, tanaman ini dipercaya memiliki kegunaan untuk
                    {kegunaan}.
                    <br><br>
                    Bagian yang digunakan pada tanaman ini adalah bagian {bagian}, tanaman ini dibudidaya dengan cara
                    {diperbanyak}.
                    <br><br>
                    Pada kebun kami, status tanaman ini adalah {status}, lokasinya ada pada {id_kebun} di petak
                    {id_petak}
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection