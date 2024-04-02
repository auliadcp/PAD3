@include('template.head')

<body class="horizontal light  ">
    <div class="wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
            <div class="container-fluid">
                <a class="navbar-brand mx-lg-1 mr-0" href="{{ url('/') }}">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                        xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg>
                </a>
                <span style="font-weight: bold; font-size: 15px;">Delta Subur Prima</span>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item">
                        <a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="light">
                            <i class="fe fe-sun fe-16"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="row align-items-center mb-2">
                            <div class="col">
                                <h2 class="h5 page-title">Informasi Pengiriman</h2>
                            </div>
                        </div>
                        <div class="card shadow ">
                            <div class="card-header">
                                <strong class="card-title">No. Pesanan: ABC1234567890</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="example-readonly">Nama</label>
                                            <input type="text" id="example-readonly" class="form-control"
                                                readonly="" value="abcdefghij">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="example-readonly">No. Handphone</label>
                                            <input type="text" id="example-readonly" class="form-control"
                                                readonly="" value="0987654321">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="example-static">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" readonly>asdfghjkl
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="example-readonly">Resi</label>
                                            <input type="text" id="example-readonly" class="form-control"
                                                readonly="" value="OIK87763527">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="example-readonly">Kurir</label>
                                            <input type="text" id="example-readonly" class="form-control"
                                                readonly="" value="JMN EXPRESS">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="example-readonly">tanggal - jam dikirim</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="height: 30px;"></div>
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="h5 page-title">Rincian Pesanan</h2>
                            </div>
                        </div>
                        <div class="col-13">
                            <div class="card shadow">
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Produk</th>
                                                <th>Qty</th>
                                                <th>Total Harga Produk</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Beau Barrera</td>
                                                <td>x2</td>
                                                <td>Rp30.000</td>
                                                <td><span class="badge badge-pill badge-success">Produk Selesai
                                                        Dibuat</span></td>
                                            </tr>
                                            <tr>
                                                <td>Beau Barrera</td>
                                                <td>x4</td>
                                                <td>Rp50.000</td>
                                                <td><span class="badge badge-pill badge-warning">Produk Sedang
                                                        Diproses</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h6>Subtotal Produk: Rp80.000</h6>
                                    <h6>Subtotal Pengiriman: Rp10.000</h6>
                                    <h6>Total Pembayaran: Rp90.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
        </main>

    </div> <!-- .wrapper -->
    @include('template.script')
</body>
