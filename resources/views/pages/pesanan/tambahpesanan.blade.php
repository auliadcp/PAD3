@extends('template.main')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Pesanan</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card shadow">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <strong class="card-title">Tambah Data Customer</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tanggal">Tanggal</label>
                                                <input type="date" id="tanggal" class="form-control">
                                            </div>
                                            <div>
                                                <label for="kode">Kode</label>
                                                <input type="text" id="kode" class="form-control" readonly
                                                    value="123098">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="example-hp">No. Handphone</label>
                                                <input type="hp" id="example-hp" name="example-hp"
                                                    class="form-control">
                                            </div>
                                        </div> <!-- /.col -->
                                        <div class="form-group mb-3">
                                            <label for="example-static">Alamat Pengiriman</label>
                                            <textarea name="alamat" class="form-control" id="alamat" cols="55" rows="10">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="#" class="btn mb-2 btn-outline-danger mx-2">Batal</a>
                                        <a href="#" class="btn mb-2 btn bg-success-darker text-white">Simpan<span
                                                class="fe fe-chevron-right ml-2"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card shadow">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <strong class="card-title">Tambah Data Pesanan</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="example-hp">No. Handphone</label>
                                                <input type="hp" id="example-hp" name="example-hp"
                                                    class="form-control">
                                            </div>
                                        </div> <!-- /.col -->
                                        <div class="form-group mb-3">
                                            <label for="example-static">Alamat Pengiriman</label>
                                            <textarea name="alamat" class="form-control" id="alamat" cols="55" rows="10">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="#" class="btn mb-2 btn-outline-danger mx-2"><span
                                                class="fe fe-chevron-left mr-2"></span>Kembali </a>
                                        <a href="#" class="btn mb-2 btn bg-success-darker text-white">Simpan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
        <script>
            $(function() {
                $('#tableku').DataTable();
                $('#tableku2').DataTable();
            });
        </script>
    @endsection
