@extends('template.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Petak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Petak</li>
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
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tab-petak" data-toggle="pill"
                                        href="#tab-petak" role="tab" aria-controls="tab-petak" aria-selected="true">Data
                                        Petak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tab-tambah-edit" data-toggle="pill"
                                        href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit"
                                        aria-selected="false">Tambah & Edit Petak</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="tab-petak" role="tabpanel"
                                    aria-labelledby="custom-tab-petak">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bunga</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm"
                                                        onclick="editPetak('1','Bunga')">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        Edit
                                                    </button>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Petak? Menghapus Petak Dapat Menghapus Seluruh Data Yang Berelasi')"
                                                        href="#">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab-tambah-edit" role="tabpanel"
                                    aria-labelledby="custom-tab-tambah-edit">
                                    <form action="{{ route('post') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID</label>
                                            <input type="number" class="form-control" id="id" name="id"
                                                placeholder="Masukkan ID" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Masukkan Nama Petak" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="proses" id="proses" value="Tambah"
                                                class="btn btn-primary">
                                        </div>
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