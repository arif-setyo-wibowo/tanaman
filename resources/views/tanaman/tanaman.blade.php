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
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tab-tanaman" data-toggle="pill"
                                        href="#tab-tanaman" role="tab" aria-controls="tab-tanaman"
                                        aria-selected="true">Data
                                        Tanaman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tab-tambah-edit" data-toggle="pill"
                                        href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit"
                                        aria-selected="false">Tambah & Edit Tanaman</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="tab-tanaman" role="tabpanel"
                                    aria-labelledby="custom-tab-tanaman">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Lokal</th>
                                                <th>Nama Latin</th>
                                                <th>Kegunaan</th>
                                                <th>Famili</th>
                                                <th>Cara Perbanyak</th>
                                                <th>Bagian yang Digunakan</th>
                                                <th>Asal</th>
                                                <th>Petak</th>
                                                <th>Kebun</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bunga XXX</td>
                                                <td>Bunga CCC</td>
                                                <td>Obat Kanker</td>
                                                <td>Bunge</td>
                                                <td>Cangkok</td>
                                                <td>Bunga</td>
                                                <td>Indo</td>
                                                <td>D</td>
                                                <td>1</td>
                                                <td>11</td>
                                                <td>14</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm"
                                                        onclick="editTanaman('1','Bunga')">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        Edit
                                                    </button>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tanaman? Menghapus Tanaman Dapat Menghapus Seluruh Data Yang Berelasi')"
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
                                            <label for="exampleInputEmail1">Nama Lokal</label>
                                            <input type="text" class="form-control" id="lokal" name="lokal"
                                                placeholder="Masukkan Nama Lokal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Latin</label>
                                            <input type="text" class="form-control" id="latin" name="latin"
                                                placeholder="Masukkan Nama Latin" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kegunaan</label>
                                            <input type="text" class="form-control" id="kegunaan" name="kegunaan"
                                                placeholder="Masukkan Kegunaan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Famili</label>
                                            <input type="text" class="form-control" id="famili" name="famili"
                                                placeholder="Masukkan Famili" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Perbanyak</label>
                                            <select class="form-control" name="perbanyak" id="perbanyak" required>
                                                <option value="" selected disabled>Pilih Cara Perbanyak</option>
                                                <option value="Bunga">Bunga</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bagian</label>
                                            <select class="form-control" name="bagian" id="bagian" required>
                                                <option value="" selected disabled>Pilih Bagian yang Digunakan</option>
                                                <option value="Bunga">Bunga</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Asal</label>
                                            <input type="text" class="form-control" id="asal" name="asal"
                                                placeholder="Masukkan Asal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Petak</label>
                                            <select class="form-control" name="petak" id="petak" required>
                                                <option value="" selected disabled>Pilih Petak yang Digunakan</option>
                                                <option value="Bunga">Bunga</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kebun</label>
                                            <select class="form-control" name="kebun" id="kebun" required>
                                                <option value="" selected disabled>Pilih Kebun yang Digunakan</option>
                                                <option value="Bunga">Bunga</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tahun</label>
                                            <input type="text" class="form-control" id="tahun" name="tahun"
                                                placeholder="Masukkan Tahun" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jumlah</label>
                                            <input type="number" class="form-control" id="jumlah" name="jumlah"
                                                placeholder="Masukkan Jumlah" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Latitude</label>
                                            <input type="text" class="form-control" id="lat" name="lat"
                                                placeholder="Masukkan Latitude" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Longitude</label>
                                            <input type="text" class="form-control" id="lon" name="lon"
                                                placeholder="Masukkan Longitude" required>
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