@extends('template.main')

@section('content')
    <div class="row align-items-center mb-2">
        <div class="col-6">
            <form class="form-inline">
                <div class="form-group d-none d-lg-inline">
                    <label for="reportrange" class="float-left">Date Ranges</label>
                    <br>
                    <div id="reportrange" class=" text-muted">
                        <span class="small"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6">
            <h2 class="h5 float-right">Selamat Datang Admin!</h2>

        </div>
        <div class="col-6">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow bg-light text-secondary-darker">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-success-dark">
                                <i class="fe fe-16 fe-shopping-bag text-secondary-darker mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small mb-0">Laporan Penjualan</p>
                            <p class="small text-success-dark">Unduh Disini!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow bg-light text-secondary-darker">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-success-dark">
                                <i class="fe fe-16 fe-shopping-cart text-secondary-darker mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small mb-0">Orders</p>
                            <span class="h3 mb-0">1,869</span>
                            <span class="small text-success">+16.5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
