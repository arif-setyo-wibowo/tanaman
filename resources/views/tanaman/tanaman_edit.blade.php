@extends('template.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tanaman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Tanaman</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 ">
                    <?php if (session()->has('msg')):?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="autoDismissAlert">
                        {{ session('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif ?>
                    @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="autoDismissAlert">
                            {{ Session::get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tab-tambah-edit" data-toggle="pill"
                                        href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit"
                                        aria-selected="false">Edit Tanaman</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="tab-tambah-edit" role="tabpanel"
                                    aria-labelledby="custom-tab-tambah-edit">
                                    @foreach ($tanaman as $item)
                                    <form action="{{ route('tanaman.update',$item->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Lokal</label>
                                            <input type="text" class="form-control" id="lokal" name="lokal"
                                                placeholder="Masukkan Nama Lokal" value="{{ $item->nama_lokal }}" required>
                                            <input type="hidden" name="idtanaman" value="{{ $item->id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Latin</label>
                                            <input type="text" class="form-control" id="latin" name="latin"
                                                placeholder="Masukkan Nama Latin" value="{{ $item->nama_latin }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kegunaan</label>
                                            <input type="text" class="form-control" id="kegunaan" name="kegunaan"
                                                placeholder="Masukkan Kegunaan" value="{{ $item->kegunaan }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Famili</label>
                                            <input type="text" class="form-control" id="famili" name="famili"
                                                placeholder="Masukkan Famili" value="{{ $item->famili }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Perbanyak</label>
                                            <select class="form-control" name="perbanyak" id="perbanyak" required>
                                                <option disabled>Pilih Cara Perbanyak</option>
                                                @foreach ($perbanyak as $data)
                                                    <option value="{{ $data->ID }}" {{ $data->ID == $item->id_perbanyak ? 'selected' : '' }}>
                                                        {{ $data->NAMA }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bagian</label>
                                            <select class="form-control" name="bagian" id="bagian" required>
                                                <option disabled>Pilih Bagian yang Digunakan</option>
                                                @foreach ($bagian as $data)
                                                    <option value="{{ $data->ID }}" {{ $data->ID == $item->id_bagian_yg_digunakan ? 'selected' : '' }}>
                                                        {{ $data->NAMA }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Asal</label>
                                            <input type="text" class="form-control" id="asal" name="asal"
                                                placeholder="Masukkan Asal" value="{{ $item->asal}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Petak</label>
                                            <select class="form-control" name="petak" id="petak" required>
                                                <option disabled>Pilih Petak yang Digunakan</option>
                                                @foreach ($petak as $data)
                                                    <option value="{{ $data->ID }}" {{ $data->ID == $item->id_petak ? 'selected' : '' }}>
                                                        {{ $data->NAMA }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kebun</label>
                                            <select class="form-control" name="kebun" id="kebun" required>
                                                <option disabled>Pilih Kebun yang Digunakan</option>
                                                @foreach ($kebun as $data)
                                                    <option value="{{ $data->ID }}" {{ $data->ID == $item->id_kebun ? 'selected' : '' }}>
                                                        {{ $data->NAMA }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="exampleInputEmail1">Tahun</label>
                                            <select class="form-control" name="tahun" id="tahun" required>
                                                <option selected disabled>Pilih Tahun</option>
                                                @for ($i = 1950; $i < 2100; $i++)
                                                <option value="{{ $i }}">{{ $i}}</option>
                                                @endfor
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <select class="form-control" name="status" id="status" required>
                                                <option disabled>Pilih Status</option>
                                                <option value="Hidup" {{ $item->status == "Hidup" ? 'selected' : '' }}>Hidup</option>
                                                <option value="Mati" {{ $item->status == "Mati" ? 'selected' : '' }}>Mati</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Latitude</label>
                                            <input type="text" class="form-control" name="lat"
                                                placeholder="Masukkan Latitude" value="{{ $item->latitude}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Longitude</label>
                                            <input type="text" class="form-control" name="lon"
                                                placeholder="Masukkan Longitude" value="{{ $item->longitude}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="proses" id="proses" value="Update"
                                                class="btn btn-primary">
                                                <a href="{{ route('tanaman.index')}}" class="btn btn-warning" style="display: inline">Kembali</a>
                                        </div>
                                        
                                        @endforeach
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@endsection