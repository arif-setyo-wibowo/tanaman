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
                    data-nav="false" data-thumbs="false" data-autoplay="true" data-autoplaytime="2000">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($gambar as $g)
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="{{ asset('uploads/' . $g->path) }}"
                                            srcset="{{ asset('uploads/' . $g->path) }} 2x" alt="" /><a class="item-link"
                                            href="{{ asset('uploads/' . $g->path) }}" data-glightbox
                                            data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                </div>
                            @endforeach
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <table class="table table-bordered table-hover table-responsive mt-5">
                    <tr>
                        <th colspan="2" class="text-center">Penanaman</th>
                    </tr>
                    <tr>
                        <th>Tahun</th>
                        <th>Jumlah</th>
                    </tr>
                    @foreach ($tanaman as $t)
                        <tr>
                            <td>{{$t->tahun}}</td>
                            <td>{{$t->jumlah}}</td>
                        </tr>
                    @endforeach
                </table>
                <!-- /.swiper-container -->
            </div>
            <!-- /column -->
            <div class="col-lg-8">
                <table class="table table-bordered table-hover table-responsive">
                    <tr>
                        <th>Nama Lokal</th>
                        <td>{{$tanaman[0]->nama_lokal}}</td>
                    </tr>
                    <tr>
                        <th>Nama Latin</th>
                        <td>{{$tanaman[0]->nama_latin}}</td>
                    </tr>
                    <tr>
                        <th>Famili</th>
                        <td>{{$tanaman[0]->famili}}</td>
                    </tr>
                    <tr>
                        <th>Asal</th>
                        <td>{{$tanaman[0]->asal}}</td>
                    </tr>
                    <tr>
                        <th>Kegunaan</th>
                        <td>{{$tanaman[0]->kegunaan}}</td>
                    </tr>
                    <tr>
                        <th>Bagian</th>
                        <td>{{$tanaman[0]->nama_bagian}}</td>
                    </tr>
                    <tr>
                        <th>Perbanyak</th>
                        <td>{{$tanaman[0]->nama_perbanyak}}</td>
                    </tr>
                    <tr>
                        <th>Kebun</th>
                        <td>{{$tanaman[0]->nama_kebun}}</td>
                    </tr>
                    <tr>
                        <th>Petak</th>
                        <td>{{$tanaman[0]->nama_petak}}</td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td>{{$tanaman[0]->latitude}}</td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td>{{$tanaman[0]->longitude}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$tanaman[0]->status}}</td>
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