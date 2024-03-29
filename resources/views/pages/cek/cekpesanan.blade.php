@include('template.head')

<body class="horizontal light  ">
    <div class="wrapper">

        @include('template.navcek')

        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row align-items-center mb-2" style="margin-top: 60px;">
                            <div class="w-50 mx-auto text-center justify-content-center py-5 my-5">
                                <h2 class="page-title mb-0">Cek Pesanan Kamu Disini!</h2>
                                <p class="lead text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <form class="searchform searchform-lg">
                                    <div class="input-group">
                                        <input class="form-control form-control-lg bg-white rounded-pill pl-5 mr-2"
                                            type="search" placeholder="Kode Unik" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary rounded-pill " type="button">
                                                <a href="{{ url('detailpesanan') }}" class="text-decoration-none"
                                                    style="color: #ffff">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                            </button>
                                        </div>
                                    </div>

                                    <p class="help-text mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.</p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- main -->
    </div> <!-- .wrapper -->
    @include('template.script')
</body>
