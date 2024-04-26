@extends('template.main')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Edit Pesanan</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="kode">ID Produk</label>
                            <input type="text" id="kode" class="form-control" readonly value="123098">
                        </div>
                        <div class="form-group mb-3">
                            <label for="example-fileinput">Input Gambar Produk</label>
                            <input type="file" id="example-fileinput" class="form-control-file">
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Nama Produk</label>
                            <input type="text" id="simpleinput" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="example-select">Jenis Produk</label>
                            <select class="form-control" id="example-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Harga</label>
                            <input type="text" id="simpleinput" class="form-control">
                        </div>
                    </div> <!-- /.col -->
                    <div class="form-group mb-3">
                        <label for="example-static">BARCODE</label>
                    </div>
                </div>
                <div class="text-right">
                    <a href="#" class="btn mb-2 btn-outline-danger mx-2">Batal</a>
                    <a href="#" class="btn mb-2 btn bg-success-darker text-white">Simpan<span
                            class="fe fe-chevron-right ml-2"></a>
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
