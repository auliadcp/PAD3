@extends('template.main')

@section('content')
    <div class="col">
        <h2 class="h4 mb-1">Status Pesanan</h2>
        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr role="row">
                            <th>ID</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>produk belum diproses</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>produk sedang diproses</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>produk selesai dibuat</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>produk sedang di kirim</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
