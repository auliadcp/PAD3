@extends('template.main')

@section('content')
    <div class="col">
        <h2 class="h4 mb-1">List Pesanan Proses</h2>
        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table table-bordered" id="tablelistp">
                    <thead class="thead-dark">
                        <tr role="row">
                            <th>NO</th>
                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Alamat</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Resi</th>
                            <th>Order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td>4574</td>
                            <td>2019-09-11 10:22:04</td>
                            <td>Kitra Knapp</td>
                            <td>(132) 339-7423</td>
                            <td>P.O. Box 944, 4739 Suspendisse Road</td>
                            <td>$68.79</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td></td>
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
                        <tr role="group" class="bg-light">
                            <td colspan="10"><strong>Di Proses</strong></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2576</td>
                            <td>2020-07-14 17:18:27</td>
                            <td>Amber Rice</td>
                            <td>(791) 898-8806</td>
                            <td>P.O. Box 724, 3385 Vel Ave</td>
                            <td>$37.00</td>
                            <td><span class="badge badge-success">Success</span></td>
                            <td></td>
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
                        <tr role="group" class="bg-light">
                            <td colspan="10"><strong>Di Kirim</strong></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>4028</td>
                            <td>2021-04-11 22:33:47</td>
                            <td>Kasimir Carr</td>
                            <td>(266) 991-0479</td>
                            <td>489-624 Quis St.</td>
                            <td>$86.89</td>
                            <td><span class="badge badge-danger">Hold</span></td>
                            <td>487385-5144</td>
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
            $('#tablelistp').DataTable();
        });
    </script>
@endsection