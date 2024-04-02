@extends('template.main')

@section('content')
    <div class="col">
        <h2 class="h4 mb-1">Produk</h2>
        <div class="card shadow">
            <div class="card-body">
                <div>
                    <a href="{{ url('tambahproduk') }}" class="btn btn-primary float-right ml-3">Tambah+</a>
                </div>
                <!-- table -->
                <table class="table table-bordered" id="tableproduk">
                    <thead class="thead-dark">
                        <tr role="row">
                            <th>ID</th>
                            <th>Produk</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Barcode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>78910</td>
                            <td>diisi gambar</td>
                            <td>Contoh Sample</td>
                            <td>Kimia</td>
                            <td>Rp50.000</td>
                            <td>barcode</td>
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
            $('#tableproduk').DataTable();
        });
    </script>
@endsection
