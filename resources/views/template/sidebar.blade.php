<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ url('dashboard') }}">
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
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item  @if (Request::is('dashboard')) active @endif ">
                <a href="{{ url('dashboard') }}" class="nav-link @if (Request::is('dashboard')) text-primary @endif">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text ">Dashboard</span>
                </a>
            </li>
        </ul>

        <p class=" nav-heading mt-4 mb-1">
            <span>Pencatatan</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item  @if (Request::is('pesanan')) active @endif ">
                <a href="{{ url('pesanan') }}" class="nav-link @if (Request::is('pesanan')) text-primary @endif">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text ">Pesanan Masuk</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item  @if (Request::is('listpesanan')) active @endif ">
                <a href="{{ url('listpesanan') }}"
                    class="nav-link @if (Request::is('listpesanan')) text-primary @endif">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text ">List Pesanan</span>
                </a>
            </li>
        </ul>
        <p class=" nav-heading mt-4 mb-1">
            <span>Produk</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item  @if (Request::is('produk')) active @endif ">
                <a href="{{ url('produk') }}" class="nav-link @if (Request::is('produk')) text-primary @endif">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text ">Data Produk</span>
                </a>
            </li>
        </ul>
        <p class=" nav-heading mt-4 mb-1">
            <span>Status</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item  @if (Request::is('status')) active @endif ">
                <a href="{{ url('status') }}" class="nav-link @if (Request::is('status')) text-primary @endif">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text ">Status Pesanan</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

@section('script')
@endsection
