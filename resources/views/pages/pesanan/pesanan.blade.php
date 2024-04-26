@extends('template.main')

@section('content')
    <div class="col">
        <h2 class="h4 mb-1">Data Pesanan Masuk</h2>
        <div class="card shadow">
            <div class="card-body">
                <div>
                    <a href="{{ url('tambahpesanan') }}" class="btn btn-primary float-right ml-3">Tambah+</a>
                </div>
                <!-- table -->
                <table class="table table-bordered" id="tablepesanan">
                    <thead class="thead-dark">
                        <tr role="row">
                            <th>NO</th>
                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Alamat</th>
                            <th>Total</th>
                            <th>Order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>4574</td>
                            <td>2019-09-11 10:22:04</td>
                            <td>Kitra Knapp</td>
                            <td>08808080808</td>
                            <td>Jl. Kalimantan </td>
                            <td>Rp. 140.000</td>
                            <td>Detail Order</td>
                            <td><button class="btn btn-sm more-horizontal" type="button">
                                    <span class="text-muted sr-only">Action</span>
                                    <a class="btn btn-sm" href="#"><i class="fe fe-edit"
                                            style="font-size: 20px;"></i></a>
                                    <a class="btn btn-sm" href="#"><i class="fe fe-trash-2"
                                            style="font-size: 20px;"></i></a>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $('#tablepesanan').DataTable();
        });
    </script>
@endsection
