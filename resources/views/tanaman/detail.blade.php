@extends('template.template-front')
@section('content')
<section class="bg-leaf bg-overlay bg-overlay-300">
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
                <a class="btn btn-leaf w-100 mb-5" href="{{route('front')}}">Kembali</a>
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
                <table class="table table-bordered table-hover table-responsive">
                    <tr>
                        <th>Nama Lokal</th>
                        <td>Bunga</td>
                    </tr>
                    <tr>
                        <th>Nama Latin</th>
                        <td>Kembang</td>
                    </tr>
                    <tr>
                        <th>Famili</th>
                        <td>Keluarga</td>
                    </tr>
                    <tr>
                        <th>Asal</th>
                        <td>Indo</td>
                    </tr>
                    <tr>
                        <th>Kegunaan</th>
                        <td>Banyak</td>
                    </tr>
                    <tr>
                        <th>Bagian</th>
                        <td>Daun</td>
                    </tr>
                    <tr>
                        <th>Perbanyak</th>
                        <td>Cangkok</td>
                    </tr>
                    <tr>
                        <th>Kebun</th>
                        <td>Utama</td>
                    </tr>
                    <tr>
                        <th>Petak</th>
                        <td>W</td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td>12</td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td>53</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>Hidup</td>
                    </tr>
                </table>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection