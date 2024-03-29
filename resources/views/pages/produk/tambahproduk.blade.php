@extends('template.main')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Pesanan</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card shadow">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <strong class="card-title">Data Pesanan</strong>
                                </div>
                                <div class="card-body">
                                    <h1>ini nanti ada scan qr code </h1>
                                    {{-- <div class="row">
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
                                    </div> --}}
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
