@extends('template.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penanaman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Penanaman</li>
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
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link" id="custom-tab-tambah-edit" data-toggle="pill"
                                        href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit"
                                        aria-selected="false">Edit Penanaman</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="tab-tambah-edit" role="tabpanel"
                                    aria-labelledby="custom-tab-tambah-edit">
                                    @foreach ($penanaman as $item)
                                        
                                    <form action="{{ route('penanaman.update', $item->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanaman</label>
                                            <input type="hidden"value="{{ $item->id}}" name="idpenanaman" >
                                            <select class="form-control" name="tanaman" id="tanaman" required>
                                                <option disabled>Pilih Tanaman</option>
                                                @foreach ($tanaman as $data)
                                                    <option value="{{ $data->id}}"  {{ $data->id == $item->id_tanaman ? 'selected' : '' }}>{{ $data->nama_lokal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tahun</label>
                                            <select class="form-control" name="tahun" id="tanaman" required>
                                                <option disabled>Pilih Tahun</option>
                                                @for ($i = 1950; $i < 2100; $i++)
                                                <option value="{{ $i }}" {{ $i == $item->tahun ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jumlah</label>
                                            <input type="number" class="form-control" id="jumlah" name="jumlah"
                                                placeholder="Masukkan Jumlah" value="{{ $item->jumlah}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="proses" id="proses" value="Update"
                                                class="btn btn-primary">
                                                <a href="{{ route('penanaman.index')}}" class="btn btn-warning" style="display: inline">Kembali</a>
                                        </div>
                                    </form>
                                    @endforeach
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
@section('js')
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection