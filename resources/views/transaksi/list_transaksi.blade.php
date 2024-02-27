<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Laundrymu</title>
    <link rel="preconnect" href="mobile/https://fonts.gstatic.com">
    <link href="mobile/https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('mobile/img/core-img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('mobile/img/icons/icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('mobile/img/icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('mobile/img/icons/icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('mobile/img/icons/icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/vanilla-dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/sweetalert.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mobile/css/transaksi.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
    <style>
        tbody > tr > td {
            padding: 0 !important;
        }

        table.dataTable > thead > tr > th, table.dataTable > thead > tr > td {
            padding: 0!important;
        }

        div.dt-container div.dt-layout-cell {
            padding: 0!important;
        }

        table {
            border-color: transparent!important;
        }

        #semuaTransaksi_info {
            display: none;
        }

        tbody {
            border-style: none!important;
        }

        thead {
            border-style: none!important;
        }

        .dt-search {
            display: none!important;
        }

        div.dt-container.dt-empty-footer tbody > tr:last-child > * {
            border-bottom: none!important;
        }

        table.dataTable > thead > tr > th, table.dataTable > thead > tr > td {
            border-bottom: none!important;
        }

        table {
            width: 100%!important;
        }

        @media print {
            body {
                display: none; /* Sembunyikan halaman saat mencetak */
            }
            #printedContent {
                display: block; /* Tampilkan konten yang akan dicetak */
            }
        }
    </style>

</head>
<body>

<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>

<div class="internet-connection-status" id="internetStatus"></div>

<div class="header-area" id="headerArea">
    <div class="container">
        <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
            <div>

            </div>
            <div class="logo-wrapper"><a href="#" class="title-page">List Transaksi</a></div>
            <div class="user-profile-wrapper">
                <a href="{{ route('transaksiListLayanan') }}" class="text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">
    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-body p-0">
        <!-- Side Nav Wrapper -->
        <div class="sidenav-wrapper">
            <!-- Sidenav Profile -->
            <div class="sidenav-profile bg-gradient">
                <div class="sidenav-style1"></div>
                <!-- User Thumbnail -->
                <div class="user-profile"><img src="assets/img/bg-img/2.jpg" alt=""></div>
                <!-- User Info -->
                <div class="user-info">
                    <h6 class="user-name mb-0">Affan Islam</h6><span>CEO, Designing World</span>
                </div>
            </div>
            <!-- Sidenav Nav -->
            <ul class="sidenav-nav ps-0">
                <li><a href="assets/page-home.html"><i class="bi bi-house-door"></i>Home</a></li>
                <li><a href="assets/elements.html"><i class="bi bi-folder2-open"></i>Elements<span class="badge bg-danger rounded-pill ms-2">220+</span></a></li>
                <li><a href="assets/pages.html"><i class="bi bi-collection"></i>Pages<span class="badge bg-success rounded-pill ms-2">100+</span></a></li>
                <li><a href="assets/#"><i class="bi bi-cart-check"></i>Shop</a>
                    <ul>
                        <li><a href="assets/page-shop-grid.html">Shop Grid</a></li>
                        <li><a href="assets/page-shop-list.html">Shop List</a></li>
                        <li><a href="assets/page-shop-details.html">Shop Details</a></li>
                        <li><a href="assets/page-cart.html">Cart</a></li>
                        <li><a href="assets/page-checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li><a href="assets/settings.html"><i class="bi bi-gear"></i>Settings</a></li>
                <li>
                    <div class="night-mode-nav"><i class="bi bi-moon"></i>Night Mode
                        <div class="form-check form-switch">
                            <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                        </div>
                    </div>
                </li>
                <li><a href="assets/page-login.html"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
            </ul>
            <!-- Social Info -->
            <div class="social-info-wrap"><a href="assets/#"><i class="bi bi-facebook"></i></a><a href="assets/#"><i class="bi bi-twitter"></i></a><a href="assets/#"><i class="bi bi-linkedin"></i></a></div>
            <!-- Copyright Info -->
            <div class="copyright-info">
                <p>2022 &copy; Made by<a href="assets/#">Designing World</a></p>
            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">

    <section id="list-transaksi-header">
        <div class="container">
            <div class="pb-3 pt-3">
                <input type="text" class="form-control" placeholder="Cari nama pelanggan, layanan ..." id="searchTransaksi">
            </div>
            <div class="transaksi-menu">
                <div class="minimal-tab">
                    <ul class="nav nav-tabs mb-3" id="affanTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btn active menu-title" id="sass-tab" data-bs-toggle="tab" data-bs-target="#sass" type="button" role="tab" aria-controls="sass" aria-selected="true">Semua</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn menu-title" id="npm-tab" data-bs-toggle="tab" data-bs-target="#npm" type="button" role="tab" aria-controls="npm" aria-selected="false">Baru</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn menu-title" id="gulp-tab" data-bs-toggle="tab" data-bs-target="#gulp" type="button" role="tab" aria-controls="gulp" aria-selected="false">Diproses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn menu-title" id="pug-tab" data-bs-toggle="tab" data-bs-target="#pug" type="button" role="tab" aria-controls="pug" aria-selected="false">Selesai</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn menu-title" id="haha" data-bs-toggle="tab" data-bs-target="#diambil" type="button" role="tab" aria-controls="pug" aria-selected="false">Diambil</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container" style="display: none">
                <div class="row pb-3">
                    <div class="col-4">
                        <a class="button-filter text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                            </svg>
                            <span class="text-filter ps-1 pe-3">Filter</span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a class="button-filter d-flex justify-content-between text-black align-items-center">
                            <span class="text-filter">Status</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                <path d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-4">
                        <a class="button-filter d-flex justify-content-between text-black align-items-center">
                            <span class="text-filter">Tanggal</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                <path d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($transaksi == null)
        <section id="list-transaksi-none">
            <div class="container">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <h4 class="title-page">Tidak Ada Transaksi</h4>
                    <p>Klik tombol Tambah Transaksi  untuk membuat transaksi pertama Anda</p>
                    <a class="btn btn-primary">Tambah Transaksi</a>
                </div>
            </div>
        </section>
    @endif

    <div style="padding-top: -40px"></div>
    <section id="list-transaksi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content rounded-lg" id="affanTab2Content">
                        <div class="tab-pane fade active show" id="sass" role="tabpanel" aria-labelledby="sass-tab">
                            <table id="semuaTransaksi">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksi as $tra)
                                    <tr>
                                        <td>
                                            <div class="card card-transaksi">
                                                @if($tra->status == "baru")
                                                    <div class="card-header-transaksi">
                                                        @elseif($tra->status == "diproses")
                                                            <div class="card-header-transaksi" style="border-left: 2px solid #FFBF36!important;">
                                                                @else
                                                                    <div class="card-header-transaksi" style="border-left: 2px solid #00A3FF!important;">
                                                                        @endif
                                                                        <div>
                                                                            <p class="status-transaksi">
                                                                                @if($tra->status == "baru")
                                                                                    Laundry Baru
                                                                                @elseif($tra->status == "diproses")
                                                                                    Diproses
                                                                                @elseif($tra->status == "selesai")
                                                                                    Selesai
                                                                                @endif
                                                                            </p>
                                                                            <p class="text-transaksi mb-2">{{ tanggal_jam_indo($tra->created_at) }}</p>
                                                                            <p class="text-transaksi">{{ $tra->pelanggan->nama }} | {{ $tra->pelanggan->no_hp }}</p>
                                                                        </div>
                                                                        @if($tra->status_pembayaran == "lunas")
                                                                            <span class="status-pembayaran-success">Lunas</span>
                                                                        @else
                                                                            <span class="status-pembayaran-danger">Belum Lunas</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="card-center-header">
                                                                        <div class="d-flex justify-content-between">
                                                                            <div>
                                                                                <p class="jenis-layanan">{{ $tra->transaksi_detail[0]->layanan->nama }}</p>
                                                                                @if(count($tra->transaksi_detail) != 1)
                                                                                    <p class="keterangan-layanan">+{{ count($tra->transaksi_detail) - 1 }} Layanan Lainnya</p>
                                                                                @endif
                                                                            </div>
                                                                            <div>
                                                                                <div class="d-flex align-content-center align-items-center">
                                                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M11.427 3.00412C10.082 3.04112 9.0395 3.40612 8.0245 3.75912C6.939 4.13612 5.9145 4.49162 4.495 4.50612C3.5465 4.52112 2.5965 4.35712 1.663 4.03412L1 3.80512V12.3461L1.333 12.4646C2.2025 12.7721 3.0915 12.9496 3.9765 12.9916C4.117 12.9981 4.2545 13.0016 4.3895 13.0016C5.896 13.0016 7.0495 12.6016 8.168 12.2156C9.347 11.8076 10.459 11.4221 11.9765 11.4936C12.7808 11.5349 13.5748 11.694 14.333 11.9656L15 12.2016V3.65712L14.671 3.53712C13.8202 3.22727 12.9271 3.04922 12.0225 3.00912C11.8241 3.00032 11.6255 2.99865 11.427 3.00412ZM11.454 3.99712C11.624 3.99212 11.798 3.99212 11.9785 3.99912C12.1655 4.00712 12.3525 4.02412 12.539 4.04612C12.6151 4.35985 12.8098 4.63187 13.0822 4.80502C13.3547 4.97817 13.6837 5.03896 14 4.97462V9.52562C13.8362 9.49229 13.6674 9.49221 13.5036 9.52539C13.3397 9.55857 13.1843 9.62434 13.0463 9.71878C12.9084 9.81323 12.7909 9.93442 12.7007 10.0752C12.6106 10.2159 12.5496 10.3734 12.5215 10.5381C12.3559 10.5211 12.1898 10.5088 12.0235 10.5011C10.316 10.4261 9.057 10.8556 7.84 11.2776C6.6595 11.6866 5.541 12.0731 4.0245 12.0011C3.83563 11.9912 3.64717 11.9746 3.4595 11.9511C3.38278 11.6383 3.18801 11.3672 2.91597 11.1947C2.64393 11.0222 2.3157 10.9616 2 11.0256V6.47462C2.16477 6.50816 2.33463 6.50801 2.49934 6.47418C2.66406 6.44035 2.82022 6.37355 2.95844 6.27779C3.09666 6.18203 3.21408 6.05929 3.30363 5.91697C3.39317 5.77464 3.453 5.61567 3.4795 5.44962C3.822 5.48512 4.1645 5.50562 4.506 5.50012C6.0885 5.48412 7.239 5.08362 8.3525 4.69662C9.333 4.35512 10.2675 4.03412 11.454 3.99712ZM8 5.50012C6.897 5.50012 6 6.62162 6 8.00012C6 9.37862 6.897 10.5001 8 10.5001C9.103 10.5001 10 9.37862 10 8.00012C10 6.62162 9.103 5.50012 8 5.50012ZM8 6.50012C8.542 6.50012 9 7.18712 9 8.00012C9 8.81312 8.542 9.50012 8 9.50012C7.458 9.50012 7 8.81312 7 8.00012C7 7.18712 7.458 6.50012 8 6.50012ZM11.75 6.50012C11.5511 6.50012 11.3603 6.57914 11.2197 6.71979C11.079 6.86045 11 7.05121 11 7.25012C11 7.44904 11.079 7.6398 11.2197 7.78045C11.3603 7.92111 11.5511 8.00012 11.75 8.00012C11.9489 8.00012 12.1397 7.92111 12.2803 7.78045C12.421 7.6398 12.5 7.44904 12.5 7.25012C12.5 7.05121 12.421 6.86045 12.2803 6.71979C12.1397 6.57914 11.9489 6.50012 11.75 6.50012ZM4.25 8.00012C4.05109 8.00012 3.86032 8.07914 3.71967 8.21979C3.57902 8.36045 3.5 8.55121 3.5 8.75012C3.5 8.94904 3.57902 9.1398 3.71967 9.28045C3.86032 9.42111 4.05109 9.50012 4.25 9.50012C4.44891 9.50012 4.63968 9.42111 4.78033 9.28045C4.92098 9.1398 5 8.94904 5 8.75012C5 8.55121 4.92098 8.36045 4.78033 8.21979C4.63968 8.07914 4.44891 8.00012 4.25 8.00012Z" fill="#19C22D"/>
                                                                                    </svg>
                                                                                    <p class="jenis-pembayaran">{{ $tra->pembayaran->nama }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-bottom-transaksi">
                                                                        <div class="row">
                                                                            <div class="col-5">
                                                                                <a class="btn btn-putih" onclick="printStruk('{{ $tra->order_number }}')">Cetak Nota</a>
                                                                            </div>
                                                                            <div class="col-5">
                                                                                <a onclick="prosesTransaksi('{{ $tra->order_number }}', '{{ $tra->status }}')" class="btn btn-blue">
                                                                                    @if($tra->status == "baru")
                                                                                        Proses
                                                                                    @elseif($tra->status == "diproses")
                                                                                        Selesai
                                                                                    @else
                                                                                        Diambil
                                                                                    @endif
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-2">
                                                                                <a onclick="pilihan('{{ $tra->order_number }}')" class="btn btn-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                                        <path d="M9 15.25C9 14.9185 9.1317 14.6005 9.36612 14.3661C9.60054 14.1317 9.91848 14 10.25 14C10.5815 14 10.8995 14.1317 11.1339 14.3661C11.3683 14.6005 11.5 14.9185 11.5 15.25C11.5 15.5815 11.3683 15.8995 11.1339 16.1339C10.8995 16.3683 10.5815 16.5 10.25 16.5C9.91848 16.5 9.60054 16.3683 9.36612 16.1339C9.1317 15.8995 9 15.5815 9 15.25ZM9 10.25C9 9.91848 9.1317 9.60054 9.36612 9.36612C9.60054 9.1317 9.91848 9 10.25 9C10.5815 9 10.8995 9.1317 11.1339 9.36612C11.3683 9.60054 11.5 9.91848 11.5 10.25C11.5 10.5815 11.3683 10.8995 11.1339 11.1339C10.8995 11.3683 10.5815 11.5 10.25 11.5C9.91848 11.5 9.60054 11.3683 9.36612 11.1339C9.1317 10.8995 9 10.5815 9 10.25ZM9 5.25C9 4.91848 9.1317 4.60054 9.36612 4.36612C9.60054 4.1317 9.91848 4 10.25 4C10.5815 4 10.8995 4.1317 11.1339 4.36612C11.3683 4.60054 11.5 4.91848 11.5 5.25C11.5 5.58152 11.3683 5.89946 11.1339 6.13388C10.8995 6.3683 10.5815 6.5 10.25 6.5C9.91848 6.5 9.60054 6.3683 9.36612 6.13388C9.1317 5.89946 9 5.58152 9 5.25Z" fill="#262626"/>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="npm" role="tabpanel" aria-labelledby="npm-tab">
                            <table id="transaksiBaru">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksi as $tra)
                                    @if($tra->status == "baru")
                                        <tr>
                                            <td>
                                                <div class="card card-transaksi">
                                                    <div class="card-header-transaksi">
                                                        <div>
                                                            <p class="status-transaksi">
                                                                @if($tra->status == "baru")
                                                                    Laundry Baru
                                                                @elseif($tra->status == "diproses")
                                                                    Diproses
                                                                @elseif($tra->status == "selesai")
                                                                    Selesai
                                                                @endif
                                                            </p>
                                                            <p class="text-transaksi mb-2">{{ tanggal_jam_indo($tra->created_at) }}</p>
                                                            <p class="text-transaksi">{{ $tra->pelanggan->nama }} | {{ $tra->pelanggan->no_hp }}</p>
                                                        </div>
                                                        @if($tra->status_pembayaran == "lunas")
                                                            <span class="status-pembayaran-success">Lunas</span>
                                                        @else
                                                            <span class="status-pembayaran-danger">Belum Lunas</span>
                                                        @endif
                                                    </div>
                                                    <div class="card-center-header">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="jenis-layanan">{{ $tra->transaksi_detail[0]->layanan->nama }}</p>
                                                                @if(count($tra->transaksi_detail) != 1)
                                                                    <p class="keterangan-layanan">+{{ count($tra->transaksi_detail) - 1 }} Layanan Lainnya</p>
                                                                @endif
                                                            </div>
                                                            <div>
                                                                <div class="d-flex align-content-center align-items-center">
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M11.427 3.00412C10.082 3.04112 9.0395 3.40612 8.0245 3.75912C6.939 4.13612 5.9145 4.49162 4.495 4.50612C3.5465 4.52112 2.5965 4.35712 1.663 4.03412L1 3.80512V12.3461L1.333 12.4646C2.2025 12.7721 3.0915 12.9496 3.9765 12.9916C4.117 12.9981 4.2545 13.0016 4.3895 13.0016C5.896 13.0016 7.0495 12.6016 8.168 12.2156C9.347 11.8076 10.459 11.4221 11.9765 11.4936C12.7808 11.5349 13.5748 11.694 14.333 11.9656L15 12.2016V3.65712L14.671 3.53712C13.8202 3.22727 12.9271 3.04922 12.0225 3.00912C11.8241 3.00032 11.6255 2.99865 11.427 3.00412ZM11.454 3.99712C11.624 3.99212 11.798 3.99212 11.9785 3.99912C12.1655 4.00712 12.3525 4.02412 12.539 4.04612C12.6151 4.35985 12.8098 4.63187 13.0822 4.80502C13.3547 4.97817 13.6837 5.03896 14 4.97462V9.52562C13.8362 9.49229 13.6674 9.49221 13.5036 9.52539C13.3397 9.55857 13.1843 9.62434 13.0463 9.71878C12.9084 9.81323 12.7909 9.93442 12.7007 10.0752C12.6106 10.2159 12.5496 10.3734 12.5215 10.5381C12.3559 10.5211 12.1898 10.5088 12.0235 10.5011C10.316 10.4261 9.057 10.8556 7.84 11.2776C6.6595 11.6866 5.541 12.0731 4.0245 12.0011C3.83563 11.9912 3.64717 11.9746 3.4595 11.9511C3.38278 11.6383 3.18801 11.3672 2.91597 11.1947C2.64393 11.0222 2.3157 10.9616 2 11.0256V6.47462C2.16477 6.50816 2.33463 6.50801 2.49934 6.47418C2.66406 6.44035 2.82022 6.37355 2.95844 6.27779C3.09666 6.18203 3.21408 6.05929 3.30363 5.91697C3.39317 5.77464 3.453 5.61567 3.4795 5.44962C3.822 5.48512 4.1645 5.50562 4.506 5.50012C6.0885 5.48412 7.239 5.08362 8.3525 4.69662C9.333 4.35512 10.2675 4.03412 11.454 3.99712ZM8 5.50012C6.897 5.50012 6 6.62162 6 8.00012C6 9.37862 6.897 10.5001 8 10.5001C9.103 10.5001 10 9.37862 10 8.00012C10 6.62162 9.103 5.50012 8 5.50012ZM8 6.50012C8.542 6.50012 9 7.18712 9 8.00012C9 8.81312 8.542 9.50012 8 9.50012C7.458 9.50012 7 8.81312 7 8.00012C7 7.18712 7.458 6.50012 8 6.50012ZM11.75 6.50012C11.5511 6.50012 11.3603 6.57914 11.2197 6.71979C11.079 6.86045 11 7.05121 11 7.25012C11 7.44904 11.079 7.6398 11.2197 7.78045C11.3603 7.92111 11.5511 8.00012 11.75 8.00012C11.9489 8.00012 12.1397 7.92111 12.2803 7.78045C12.421 7.6398 12.5 7.44904 12.5 7.25012C12.5 7.05121 12.421 6.86045 12.2803 6.71979C12.1397 6.57914 11.9489 6.50012 11.75 6.50012ZM4.25 8.00012C4.05109 8.00012 3.86032 8.07914 3.71967 8.21979C3.57902 8.36045 3.5 8.55121 3.5 8.75012C3.5 8.94904 3.57902 9.1398 3.71967 9.28045C3.86032 9.42111 4.05109 9.50012 4.25 9.50012C4.44891 9.50012 4.63968 9.42111 4.78033 9.28045C4.92098 9.1398 5 8.94904 5 8.75012C5 8.55121 4.92098 8.36045 4.78033 8.21979C4.63968 8.07914 4.44891 8.00012 4.25 8.00012Z" fill="#19C22D"/>
                                                                    </svg>
                                                                    <p class="jenis-pembayaran">{{ $tra->pembayaran->nama }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-bottom-transaksi">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <a class="btn btn-putih" onclick="printStruk('{{ $tra->order_number }}')">Cetak Nota</a>
                                                            </div>
                                                            <div class="col-5">
                                                                <a onclick="prosesTransaksi('{{ $tra->order_number }}', '{{ $tra->status }}')" class="btn btn-blue">
                                                                    @if($tra->status == "baru")
                                                                        Proses
                                                                    @elseif($tra->status == "diproses")
                                                                        Selesai
                                                                    @else
                                                                        Diambil
                                                                    @endif
                                                                </a>
                                                            </div>
                                                            <div class="col-2">
                                                                <a onclick="pilihan('{{ $tra->order_number }}')" class="btn btn-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                        <path d="M9 15.25C9 14.9185 9.1317 14.6005 9.36612 14.3661C9.60054 14.1317 9.91848 14 10.25 14C10.5815 14 10.8995 14.1317 11.1339 14.3661C11.3683 14.6005 11.5 14.9185 11.5 15.25C11.5 15.5815 11.3683 15.8995 11.1339 16.1339C10.8995 16.3683 10.5815 16.5 10.25 16.5C9.91848 16.5 9.60054 16.3683 9.36612 16.1339C9.1317 15.8995 9 15.5815 9 15.25ZM9 10.25C9 9.91848 9.1317 9.60054 9.36612 9.36612C9.60054 9.1317 9.91848 9 10.25 9C10.5815 9 10.8995 9.1317 11.1339 9.36612C11.3683 9.60054 11.5 9.91848 11.5 10.25C11.5 10.5815 11.3683 10.8995 11.1339 11.1339C10.8995 11.3683 10.5815 11.5 10.25 11.5C9.91848 11.5 9.60054 11.3683 9.36612 11.1339C9.1317 10.8995 9 10.5815 9 10.25ZM9 5.25C9 4.91848 9.1317 4.60054 9.36612 4.36612C9.60054 4.1317 9.91848 4 10.25 4C10.5815 4 10.8995 4.1317 11.1339 4.36612C11.3683 4.60054 11.5 4.91848 11.5 5.25C11.5 5.58152 11.3683 5.89946 11.1339 6.13388C10.8995 6.3683 10.5815 6.5 10.25 6.5C9.91848 6.5 9.60054 6.3683 9.36612 6.13388C9.1317 5.89946 9 5.58152 9 5.25Z" fill="#262626"/>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="gulp" role="tabpanel" aria-labelledby="gulp-tab">
                            <table id="transaksiDiproses">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transaksi as $tra)
                                    @if($tra->status == "diproses")
                                        <tr>
                                            <td>
                                                <div class="card card-transaksi">
                                                    <div class="card-header-transaksi" style="border-left: 2px solid #FFBF36!important;">
                                                        <div>
                                                            <p class="status-transaksi">
                                                                @if($tra->status == "baru")
                                                                    Laundry Baru
                                                                @elseif($tra->status == "diproses")
                                                                    Diproses
                                                                @elseif($tra->status == "selesai")
                                                                    Selesai
                                                                @endif
                                                            </p>
                                                            <p class="text-transaksi mb-2">{{ tanggal_jam_indo($tra->created_at) }}</p>
                                                            <p class="text-transaksi">{{ $tra->pelanggan->nama }} | {{ $tra->pelanggan->no_hp }}</p>
                                                        </div>
                                                        @if($tra->status_pembayaran == "lunas")
                                                            <span class="status-pembayaran-success">Lunas</span>
                                                        @else
                                                            <span class="status-pembayaran-danger">Belum Lunas</span>
                                                        @endif
                                                    </div>
                                                    <div class="card-center-header">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="jenis-layanan">{{ $tra->transaksi_detail[0]->layanan->nama }}</p>
                                                                @if(count($tra->transaksi_detail) != 1)
                                                                    <p class="keterangan-layanan">+{{ count($tra->transaksi_detail) - 1 }} Layanan Lainnya</p>
                                                                @endif
                                                            </div>
                                                            <div>
                                                                <div class="d-flex align-content-center align-items-center">
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M11.427 3.00412C10.082 3.04112 9.0395 3.40612 8.0245 3.75912C6.939 4.13612 5.9145 4.49162 4.495 4.50612C3.5465 4.52112 2.5965 4.35712 1.663 4.03412L1 3.80512V12.3461L1.333 12.4646C2.2025 12.7721 3.0915 12.9496 3.9765 12.9916C4.117 12.9981 4.2545 13.0016 4.3895 13.0016C5.896 13.0016 7.0495 12.6016 8.168 12.2156C9.347 11.8076 10.459 11.4221 11.9765 11.4936C12.7808 11.5349 13.5748 11.694 14.333 11.9656L15 12.2016V3.65712L14.671 3.53712C13.8202 3.22727 12.9271 3.04922 12.0225 3.00912C11.8241 3.00032 11.6255 2.99865 11.427 3.00412ZM11.454 3.99712C11.624 3.99212 11.798 3.99212 11.9785 3.99912C12.1655 4.00712 12.3525 4.02412 12.539 4.04612C12.6151 4.35985 12.8098 4.63187 13.0822 4.80502C13.3547 4.97817 13.6837 5.03896 14 4.97462V9.52562C13.8362 9.49229 13.6674 9.49221 13.5036 9.52539C13.3397 9.55857 13.1843 9.62434 13.0463 9.71878C12.9084 9.81323 12.7909 9.93442 12.7007 10.0752C12.6106 10.2159 12.5496 10.3734 12.5215 10.5381C12.3559 10.5211 12.1898 10.5088 12.0235 10.5011C10.316 10.4261 9.057 10.8556 7.84 11.2776C6.6595 11.6866 5.541 12.0731 4.0245 12.0011C3.83563 11.9912 3.64717 11.9746 3.4595 11.9511C3.38278 11.6383 3.18801 11.3672 2.91597 11.1947C2.64393 11.0222 2.3157 10.9616 2 11.0256V6.47462C2.16477 6.50816 2.33463 6.50801 2.49934 6.47418C2.66406 6.44035 2.82022 6.37355 2.95844 6.27779C3.09666 6.18203 3.21408 6.05929 3.30363 5.91697C3.39317 5.77464 3.453 5.61567 3.4795 5.44962C3.822 5.48512 4.1645 5.50562 4.506 5.50012C6.0885 5.48412 7.239 5.08362 8.3525 4.69662C9.333 4.35512 10.2675 4.03412 11.454 3.99712ZM8 5.50012C6.897 5.50012 6 6.62162 6 8.00012C6 9.37862 6.897 10.5001 8 10.5001C9.103 10.5001 10 9.37862 10 8.00012C10 6.62162 9.103 5.50012 8 5.50012ZM8 6.50012C8.542 6.50012 9 7.18712 9 8.00012C9 8.81312 8.542 9.50012 8 9.50012C7.458 9.50012 7 8.81312 7 8.00012C7 7.18712 7.458 6.50012 8 6.50012ZM11.75 6.50012C11.5511 6.50012 11.3603 6.57914 11.2197 6.71979C11.079 6.86045 11 7.05121 11 7.25012C11 7.44904 11.079 7.6398 11.2197 7.78045C11.3603 7.92111 11.5511 8.00012 11.75 8.00012C11.9489 8.00012 12.1397 7.92111 12.2803 7.78045C12.421 7.6398 12.5 7.44904 12.5 7.25012C12.5 7.05121 12.421 6.86045 12.2803 6.71979C12.1397 6.57914 11.9489 6.50012 11.75 6.50012ZM4.25 8.00012C4.05109 8.00012 3.86032 8.07914 3.71967 8.21979C3.57902 8.36045 3.5 8.55121 3.5 8.75012C3.5 8.94904 3.57902 9.1398 3.71967 9.28045C3.86032 9.42111 4.05109 9.50012 4.25 9.50012C4.44891 9.50012 4.63968 9.42111 4.78033 9.28045C4.92098 9.1398 5 8.94904 5 8.75012C5 8.55121 4.92098 8.36045 4.78033 8.21979C4.63968 8.07914 4.44891 8.00012 4.25 8.00012Z" fill="#19C22D"/>
                                                                    </svg>
                                                                    <p class="jenis-pembayaran">{{ $tra->pembayaran->nama }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-bottom-transaksi">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <a class="btn btn-putih" onclick="printStruk('{{ $tra->order_number }}')">Cetak Nota</a>
                                                            </div>
                                                            <div class="col-5">
                                                                <a onclick="prosesTransaksi('{{ $tra->order_number }}', '{{ $tra->status }}')" class="btn btn-blue">
                                                                    @if($tra->status == "baru")
                                                                        Proses
                                                                    @elseif($tra->status == "diproses")
                                                                        Selesai
                                                                    @else
                                                                        Diambil
                                                                    @endif
                                                                </a>
                                                            </div>
                                                            <div class="col-2">
                                                                <a onclick="pilihan('{{ $tra->order_number }}')" class="btn btn-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                        <path d="M9 15.25C9 14.9185 9.1317 14.6005 9.36612 14.3661C9.60054 14.1317 9.91848 14 10.25 14C10.5815 14 10.8995 14.1317 11.1339 14.3661C11.3683 14.6005 11.5 14.9185 11.5 15.25C11.5 15.5815 11.3683 15.8995 11.1339 16.1339C10.8995 16.3683 10.5815 16.5 10.25 16.5C9.91848 16.5 9.60054 16.3683 9.36612 16.1339C9.1317 15.8995 9 15.5815 9 15.25ZM9 10.25C9 9.91848 9.1317 9.60054 9.36612 9.36612C9.60054 9.1317 9.91848 9 10.25 9C10.5815 9 10.8995 9.1317 11.1339 9.36612C11.3683 9.60054 11.5 9.91848 11.5 10.25C11.5 10.5815 11.3683 10.8995 11.1339 11.1339C10.8995 11.3683 10.5815 11.5 10.25 11.5C9.91848 11.5 9.60054 11.3683 9.36612 11.1339C9.1317 10.8995 9 10.5815 9 10.25ZM9 5.25C9 4.91848 9.1317 4.60054 9.36612 4.36612C9.60054 4.1317 9.91848 4 10.25 4C10.5815 4 10.8995 4.1317 11.1339 4.36612C11.3683 4.60054 11.5 4.91848 11.5 5.25C11.5 5.58152 11.3683 5.89946 11.1339 6.13388C10.8995 6.3683 10.5815 6.5 10.25 6.5C9.91848 6.5 9.60054 6.3683 9.36612 6.13388C9.1317 5.89946 9 5.58152 9 5.25Z" fill="#262626"/>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pug" role="tabpanel" aria-labelledby="pug-tab">
                            <table id="transaksiSelesai">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transaksi as $tra)
                                        @if($tra->status == "selesai")
                                            <tr>
                                                <td>
                                                    <div class="card card-transaksi">
                                                        <div class="card-header-transaksi" style="border-left: 2px solid #00A3FF!important;">
                                                            <div>
                                                                <p class="status-transaksi">
                                                                    @if($tra->status == "baru")
                                                                        Laundry Baru
                                                                    @elseif($tra->status == "diproses")
                                                                        Diproses
                                                                    @elseif($tra->status == "selesai")
                                                                        Selesai
                                                                    @endif
                                                                </p>
                                                                <p class="text-transaksi mb-2">{{ tanggal_jam_indo($tra->created_at) }}</p>
                                                                <p class="text-transaksi">{{ $tra->pelanggan->nama }} | {{ $tra->pelanggan->no_hp }}</p>
                                                            </div>
                                                            @if($tra->status_pembayaran == "lunas")
                                                                <span class="status-pembayaran-success">Lunas</span>
                                                            @else
                                                                <span class="status-pembayaran-danger">Belum Lunas</span>
                                                            @endif
                                                        </div>
                                                        <div class="card-center-header">
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <p class="jenis-layanan">{{ $tra->transaksi_detail[0]->layanan->nama }}</p>
                                                                    @if(count($tra->transaksi_detail) != 1)
                                                                        <p class="keterangan-layanan">+{{ count($tra->transaksi_detail) - 1 }} Layanan Lainnya</p>
                                                                    @endif
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex align-content-center align-items-center">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.427 3.00412C10.082 3.04112 9.0395 3.40612 8.0245 3.75912C6.939 4.13612 5.9145 4.49162 4.495 4.50612C3.5465 4.52112 2.5965 4.35712 1.663 4.03412L1 3.80512V12.3461L1.333 12.4646C2.2025 12.7721 3.0915 12.9496 3.9765 12.9916C4.117 12.9981 4.2545 13.0016 4.3895 13.0016C5.896 13.0016 7.0495 12.6016 8.168 12.2156C9.347 11.8076 10.459 11.4221 11.9765 11.4936C12.7808 11.5349 13.5748 11.694 14.333 11.9656L15 12.2016V3.65712L14.671 3.53712C13.8202 3.22727 12.9271 3.04922 12.0225 3.00912C11.8241 3.00032 11.6255 2.99865 11.427 3.00412ZM11.454 3.99712C11.624 3.99212 11.798 3.99212 11.9785 3.99912C12.1655 4.00712 12.3525 4.02412 12.539 4.04612C12.6151 4.35985 12.8098 4.63187 13.0822 4.80502C13.3547 4.97817 13.6837 5.03896 14 4.97462V9.52562C13.8362 9.49229 13.6674 9.49221 13.5036 9.52539C13.3397 9.55857 13.1843 9.62434 13.0463 9.71878C12.9084 9.81323 12.7909 9.93442 12.7007 10.0752C12.6106 10.2159 12.5496 10.3734 12.5215 10.5381C12.3559 10.5211 12.1898 10.5088 12.0235 10.5011C10.316 10.4261 9.057 10.8556 7.84 11.2776C6.6595 11.6866 5.541 12.0731 4.0245 12.0011C3.83563 11.9912 3.64717 11.9746 3.4595 11.9511C3.38278 11.6383 3.18801 11.3672 2.91597 11.1947C2.64393 11.0222 2.3157 10.9616 2 11.0256V6.47462C2.16477 6.50816 2.33463 6.50801 2.49934 6.47418C2.66406 6.44035 2.82022 6.37355 2.95844 6.27779C3.09666 6.18203 3.21408 6.05929 3.30363 5.91697C3.39317 5.77464 3.453 5.61567 3.4795 5.44962C3.822 5.48512 4.1645 5.50562 4.506 5.50012C6.0885 5.48412 7.239 5.08362 8.3525 4.69662C9.333 4.35512 10.2675 4.03412 11.454 3.99712ZM8 5.50012C6.897 5.50012 6 6.62162 6 8.00012C6 9.37862 6.897 10.5001 8 10.5001C9.103 10.5001 10 9.37862 10 8.00012C10 6.62162 9.103 5.50012 8 5.50012ZM8 6.50012C8.542 6.50012 9 7.18712 9 8.00012C9 8.81312 8.542 9.50012 8 9.50012C7.458 9.50012 7 8.81312 7 8.00012C7 7.18712 7.458 6.50012 8 6.50012ZM11.75 6.50012C11.5511 6.50012 11.3603 6.57914 11.2197 6.71979C11.079 6.86045 11 7.05121 11 7.25012C11 7.44904 11.079 7.6398 11.2197 7.78045C11.3603 7.92111 11.5511 8.00012 11.75 8.00012C11.9489 8.00012 12.1397 7.92111 12.2803 7.78045C12.421 7.6398 12.5 7.44904 12.5 7.25012C12.5 7.05121 12.421 6.86045 12.2803 6.71979C12.1397 6.57914 11.9489 6.50012 11.75 6.50012ZM4.25 8.00012C4.05109 8.00012 3.86032 8.07914 3.71967 8.21979C3.57902 8.36045 3.5 8.55121 3.5 8.75012C3.5 8.94904 3.57902 9.1398 3.71967 9.28045C3.86032 9.42111 4.05109 9.50012 4.25 9.50012C4.44891 9.50012 4.63968 9.42111 4.78033 9.28045C4.92098 9.1398 5 8.94904 5 8.75012C5 8.55121 4.92098 8.36045 4.78033 8.21979C4.63968 8.07914 4.44891 8.00012 4.25 8.00012Z" fill="#19C22D"/>
                                                                        </svg>
                                                                        <p class="jenis-pembayaran">{{ $tra->pembayaran->nama }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-bottom-transaksi">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <a class="btn btn-putih" onclick="printStruk('{{ $tra->order_number }}')">Cetak Nota</a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <a onclick="prosesTransaksi('{{ $tra->order_number }}', '{{ $tra->status }}')" class="btn btn-blue">
                                                                        @if($tra->status == "baru")
                                                                            Proses
                                                                        @elseif($tra->status == "diproses")
                                                                            Selesai
                                                                        @else
                                                                            Diambil
                                                                        @endif
                                                                    </a>
                                                                </div>
                                                                <div class="col-2">
                                                                    <a onclick="pilihan('{{ $tra->order_number }}')" class="btn btn-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                            <path d="M9 15.25C9 14.9185 9.1317 14.6005 9.36612 14.3661C9.60054 14.1317 9.91848 14 10.25 14C10.5815 14 10.8995 14.1317 11.1339 14.3661C11.3683 14.6005 11.5 14.9185 11.5 15.25C11.5 15.5815 11.3683 15.8995 11.1339 16.1339C10.8995 16.3683 10.5815 16.5 10.25 16.5C9.91848 16.5 9.60054 16.3683 9.36612 16.1339C9.1317 15.8995 9 15.5815 9 15.25ZM9 10.25C9 9.91848 9.1317 9.60054 9.36612 9.36612C9.60054 9.1317 9.91848 9 10.25 9C10.5815 9 10.8995 9.1317 11.1339 9.36612C11.3683 9.60054 11.5 9.91848 11.5 10.25C11.5 10.5815 11.3683 10.8995 11.1339 11.1339C10.8995 11.3683 10.5815 11.5 10.25 11.5C9.91848 11.5 9.60054 11.3683 9.36612 11.1339C9.1317 10.8995 9 10.5815 9 10.25ZM9 5.25C9 4.91848 9.1317 4.60054 9.36612 4.36612C9.60054 4.1317 9.91848 4 10.25 4C10.5815 4 10.8995 4.1317 11.1339 4.36612C11.3683 4.60054 11.5 4.91848 11.5 5.25C11.5 5.58152 11.3683 5.89946 11.1339 6.13388C10.8995 6.3683 10.5815 6.5 10.25 6.5C9.91848 6.5 9.60054 6.3683 9.36612 6.13388C9.1317 5.89946 9 5.58152 9 5.25Z" fill="#262626"/>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="diambil" role="tabpanel" aria-labelledby="pug-tab">
                            <table id="transaksiDiambil">
                                <thead>
                                <tr>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksiDiambil as $tra)
                                    <tr>
                                        <td>
                                            <div class="card card-transaksi">
                                                <div class="card-header-transaksi" style="border-left: 2px solid #19C22D!important;">
                                                    <div>
                                                        <p class="status-transaksi">
                                                            Diambil
                                                        </p>
                                                        <p class="text-transaksi mb-2">{{ tanggal_jam_indo($tra->created_at) }}</p>
                                                        <p class="text-transaksi">{{ $tra->pelanggan->nama }} | {{ $tra->pelanggan->no_hp }}</p>
                                                    </div>
                                                    @if($tra->status_pembayaran == "lunas")
                                                        <span class="status-pembayaran-success">Lunas</span>
                                                    @else
                                                        <span class="status-pembayaran-danger">Belum Lunas</span>
                                                    @endif
                                                </div>
                                                <div class="card-center-header">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="jenis-layanan">{{ $tra->transaksi_detail[0]->layanan->nama }}</p>
                                                            @if(count($tra->transaksi_detail) != 1)
                                                                <p class="keterangan-layanan">+{{ count($tra->transaksi_detail) - 1 }} Layanan Lainnya</p>
                                                            @endif
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-content-center align-items-center">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.427 3.00412C10.082 3.04112 9.0395 3.40612 8.0245 3.75912C6.939 4.13612 5.9145 4.49162 4.495 4.50612C3.5465 4.52112 2.5965 4.35712 1.663 4.03412L1 3.80512V12.3461L1.333 12.4646C2.2025 12.7721 3.0915 12.9496 3.9765 12.9916C4.117 12.9981 4.2545 13.0016 4.3895 13.0016C5.896 13.0016 7.0495 12.6016 8.168 12.2156C9.347 11.8076 10.459 11.4221 11.9765 11.4936C12.7808 11.5349 13.5748 11.694 14.333 11.9656L15 12.2016V3.65712L14.671 3.53712C13.8202 3.22727 12.9271 3.04922 12.0225 3.00912C11.8241 3.00032 11.6255 2.99865 11.427 3.00412ZM11.454 3.99712C11.624 3.99212 11.798 3.99212 11.9785 3.99912C12.1655 4.00712 12.3525 4.02412 12.539 4.04612C12.6151 4.35985 12.8098 4.63187 13.0822 4.80502C13.3547 4.97817 13.6837 5.03896 14 4.97462V9.52562C13.8362 9.49229 13.6674 9.49221 13.5036 9.52539C13.3397 9.55857 13.1843 9.62434 13.0463 9.71878C12.9084 9.81323 12.7909 9.93442 12.7007 10.0752C12.6106 10.2159 12.5496 10.3734 12.5215 10.5381C12.3559 10.5211 12.1898 10.5088 12.0235 10.5011C10.316 10.4261 9.057 10.8556 7.84 11.2776C6.6595 11.6866 5.541 12.0731 4.0245 12.0011C3.83563 11.9912 3.64717 11.9746 3.4595 11.9511C3.38278 11.6383 3.18801 11.3672 2.91597 11.1947C2.64393 11.0222 2.3157 10.9616 2 11.0256V6.47462C2.16477 6.50816 2.33463 6.50801 2.49934 6.47418C2.66406 6.44035 2.82022 6.37355 2.95844 6.27779C3.09666 6.18203 3.21408 6.05929 3.30363 5.91697C3.39317 5.77464 3.453 5.61567 3.4795 5.44962C3.822 5.48512 4.1645 5.50562 4.506 5.50012C6.0885 5.48412 7.239 5.08362 8.3525 4.69662C9.333 4.35512 10.2675 4.03412 11.454 3.99712ZM8 5.50012C6.897 5.50012 6 6.62162 6 8.00012C6 9.37862 6.897 10.5001 8 10.5001C9.103 10.5001 10 9.37862 10 8.00012C10 6.62162 9.103 5.50012 8 5.50012ZM8 6.50012C8.542 6.50012 9 7.18712 9 8.00012C9 8.81312 8.542 9.50012 8 9.50012C7.458 9.50012 7 8.81312 7 8.00012C7 7.18712 7.458 6.50012 8 6.50012ZM11.75 6.50012C11.5511 6.50012 11.3603 6.57914 11.2197 6.71979C11.079 6.86045 11 7.05121 11 7.25012C11 7.44904 11.079 7.6398 11.2197 7.78045C11.3603 7.92111 11.5511 8.00012 11.75 8.00012C11.9489 8.00012 12.1397 7.92111 12.2803 7.78045C12.421 7.6398 12.5 7.44904 12.5 7.25012C12.5 7.05121 12.421 6.86045 12.2803 6.71979C12.1397 6.57914 11.9489 6.50012 11.75 6.50012ZM4.25 8.00012C4.05109 8.00012 3.86032 8.07914 3.71967 8.21979C3.57902 8.36045 3.5 8.55121 3.5 8.75012C3.5 8.94904 3.57902 9.1398 3.71967 9.28045C3.86032 9.42111 4.05109 9.50012 4.25 9.50012C4.44891 9.50012 4.63968 9.42111 4.78033 9.28045C4.92098 9.1398 5 8.94904 5 8.75012C5 8.55121 4.92098 8.36045 4.78033 8.21979C4.63968 8.07914 4.44891 8.00012 4.25 8.00012Z" fill="#19C22D"/>
                                                                </svg>
                                                                <p class="jenis-pembayaran">{{ $tra->pembayaran->nama }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-bottom-transaksi">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <a class="btn btn-putih" onclick="printStruk('{{ $tra->order_number }}')">Cetak Nota</a>
                                                        </div>
                                                        <div class="col-5">

                                                        </div>
                                                        <div class="col-2">
                                                            <a onclick="pilihan('{{ $tra->order_number }}')" class="btn btn-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path d="M9 15.25C9 14.9185 9.1317 14.6005 9.36612 14.3661C9.60054 14.1317 9.91848 14 10.25 14C10.5815 14 10.8995 14.1317 11.1339 14.3661C11.3683 14.6005 11.5 14.9185 11.5 15.25C11.5 15.5815 11.3683 15.8995 11.1339 16.1339C10.8995 16.3683 10.5815 16.5 10.25 16.5C9.91848 16.5 9.60054 16.3683 9.36612 16.1339C9.1317 15.8995 9 15.5815 9 15.25ZM9 10.25C9 9.91848 9.1317 9.60054 9.36612 9.36612C9.60054 9.1317 9.91848 9 10.25 9C10.5815 9 10.8995 9.1317 11.1339 9.36612C11.3683 9.60054 11.5 9.91848 11.5 10.25C11.5 10.5815 11.3683 10.8995 11.1339 11.1339C10.8995 11.3683 10.5815 11.5 10.25 11.5C9.91848 11.5 9.60054 11.3683 9.36612 11.1339C9.1317 10.8995 9 10.5815 9 10.25ZM9 5.25C9 4.91848 9.1317 4.60054 9.36612 4.36612C9.60054 4.1317 9.91848 4 10.25 4C10.5815 4 10.8995 4.1317 11.1339 4.36612C11.3683 4.60054 11.5 4.91848 11.5 5.25C11.5 5.58152 11.3683 5.89946 11.1339 6.13388C10.8995 6.3683 10.5815 6.5 10.25 6.5C9.91848 6.5 9.60054 6.3683 9.36612 6.13388C9.1317 5.89946 9 5.58152 9 5.25Z" fill="#262626"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade bottom-align-modal" id="pilihan" tabindex="-1">
    <div class="modal-dialog modal-dialog-end">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="bottomAlignModalLabel">Pilihan</h6>
                <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalPilihan">

            </div>
        </div>
    </div>
</div>

<div id="myDiv">Konten yang akan dicetak</div>

@include('menu')

@include('javascript')

<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>

<script>
    let table = $("#semuaTransaksi").DataTable({
        paging: false,
        order: false
    });

    let baru = $("#transaksiBaru").DataTable({
        paging: false,
        order: false
    });

    let diproses = $("#transaksiDiproses").DataTable({
        paging: false,
        order: false
    });

    let selesai = $("#transaksiSelesai").DataTable({
        paging: false,
        order: false
    });

    let diambil = $("#transaksiDiambil").DataTable({
        paging: false,
        order: false
    });

    $('#searchTransaksi').on( 'keyup', function () {
        table.search( this.value ).draw();
        baru.search( this.value ).draw();
        diproses.search( this.value ).draw();
        selesai.search( this.value ).draw();
        diambil.search( this.value ).draw();
    });
</script>

<script>
    function prosesTransaksi(orderNumber, status) {
        let prosesStatus = "";
        if (status === "baru") {
            prosesStatus = "diproses";
        } else if (status === "diproses") {
            prosesStatus = "selesai";
        } else {
            prosesStatus = "diambil";
        }

        Swal.fire({
            title:"Apakah anda yakin?",
            text:"Untuk memproses transaksi ini.",
            icon:"warning",
            showCancelButton:!0,
            confirmButtonText:"Proses Transaksi",
            cancelButtonText:"Kembali",
            confirmButtonClass:"btn btn-primary w-xs me-2 mt-2",
            cancelButtonClass:"btn btn-danger w-xs mt-2",
            buttonsStyling:!1,showCloseButton:!0
        }).then(function(t){
            if (t.value) {
                $.ajax({
                    url: `/proses-transaksi/${orderNumber}/${prosesStatus}`,
                    method: "GET",
                    success: function (params) {
                        console.log(params);
                        if (params.status) {
                            Swal.fire({
                                html:'<div class="mt-3">' +
                                    '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
                                    '<div class="mt-4 pt-2 fs-15">' +
                                    '<h4>Proses Transaksi Berhasil !</h4>' +
                                    `<p class="text-muted mx-4 mb-0">Transaksi dengan order number ${orderNumber} telah diproses.</p>` +
                                    '</div>' +
                                    '</div>',
                                showCancelButton:!0,
                                showConfirmButton:!1,
                                cancelButtonClass:"btn btn-primary w-xs mb-1",
                                cancelButtonText:"Kembali",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            }).then(function (res) {
                                location.replace('{{ route('transaksi') }}');
                            });
                        } else {
                            Swal.fire({
                                html:'<div class="mt-3">' +
                                    '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
                                    '<div class="mt-4 pt-2 fs-15">' +
                                    '<h4>Gagal !</h4>' +
                                    '<p class="text-muted mx-4 mb-0">Transaksi dengan order number ${orderNumber} telah diproses.</p>' +
                                    '</div>' +
                                    '</div>',
                                showCancelButton:!0,
                                showConfirmButton:!1,
                                cancelButtonClass:"btn btn-primary w-xs mb-1",
                                cancelButtonText:"Kembali",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            })
                        }
                    }
                });
            }
        });
    }

    function pilihan(orderNumber) {
        $("#pilihan").modal("show");
        document.getElementById('modalPilihan').innerHTML = `
             <a href="/detail-transaksi/${orderNumber}">
                <div class="d-flex align-items-center align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99984 10.2483V12.0003C9.46941 12.0003 8.9607 11.7896 8.58563 11.4145C8.21056 11.0395 7.99984 10.5308 7.99984 10.0003C7.99984 9.46989 8.21056 8.96118 8.58563 8.58611C8.9607 8.21104 9.46941 8.00033 9.99984 8.00033V10.2483ZM9.99984 6.66699C9.11579 6.66699 8.26794 7.01818 7.64282 7.6433C7.0177 8.26842 6.66651 9.11627 6.66651 10.0003C6.66651 10.8844 7.0177 11.7322 7.64282 12.3573C8.26794 12.9825 9.11579 13.3337 9.99984 13.3337V17.3337C6.41851 17.3337 3.91851 15.5363 2.33718 13.7803C1.47501 12.8162 0.752412 11.7359 0.190512 10.571C0.144534 10.4732 0.100525 10.3745 0.0585115 10.275L0.0505115 10.2563L0.0491782 10.251L0.0478448 10.2483C-0.0159483 10.0891 -0.0159483 9.91151 0.0478448 9.75233L0.135845 9.78833C0.106175 9.77669 0.0768305 9.76557 0.0478448 9.75233V9.74966L0.0505115 9.74433L0.0585115 9.72566C0.0996243 9.62553 0.144094 9.5268 0.191845 9.42966C0.753838 8.26519 1.47644 7.18533 2.33851 6.22166C3.91718 4.46433 6.41718 2.66699 9.99984 2.66699V6.66699ZM9.99984 8.00033V12.0003C10.5303 12.0003 11.039 11.7896 11.4141 11.4145C11.7891 11.0395 11.9998 10.5308 11.9998 10.0003C11.9998 9.46989 11.7891 8.96118 11.4141 8.58611C11.039 8.21104 10.5303 8.00033 9.99984 8.00033ZM9.99984 13.3337C10.8839 13.3337 11.7317 12.9825 12.3569 12.3573C12.982 11.7322 13.3332 10.8844 13.3332 10.0003C13.3332 9.11627 12.982 8.26842 12.3569 7.6433C11.7317 7.01818 10.8839 6.66699 9.99984 6.66699V2.66699C13.5812 2.66699 16.0812 4.46433 17.6625 6.22166C18.5246 7.18531 19.2472 8.26517 19.8092 9.42966C19.8551 9.52745 19.8991 9.62613 19.9412 9.72566L19.9478 9.74433L19.9505 9.74966L19.9518 9.75233C20.0156 9.91151 20.0156 10.0891 19.9518 10.2483V10.251L19.9478 10.2563L19.9412 10.275C19.9004 10.3752 19.8559 10.474 19.8078 10.571C19.2459 11.7355 18.5233 12.8153 17.6612 13.779C16.0825 15.5363 13.5825 17.3337 9.99984 17.3337V13.3337Z" fill="#262626"/>
                    </svg>
                    <span class="menu-modal ms-2">Lihat</span>
                </div>
            </a>
            <div class="mb-3"></div>
            <a href="/batalkan-transaksi/${orderNumber}">
                <div class="d-flex align-items-center align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3.70024 3.70024C3.81618 3.58413 3.95388 3.49202 4.10545 3.42918C4.25702 3.36633 4.41949 3.33398 4.58358 3.33398C4.74766 3.33398 4.91013 3.36633 5.0617 3.42918C5.21327 3.49202 5.35097 3.58413 5.46691 3.70024L10.0002 8.23191L14.5336 3.70024C14.6496 3.58424 14.7873 3.49222 14.9389 3.42944C15.0904 3.36667 15.2529 3.33435 15.4169 3.33435C15.581 3.33435 15.7434 3.36667 15.895 3.42944C16.0465 3.49222 16.1842 3.58424 16.3002 3.70024C16.4162 3.81624 16.5083 3.95396 16.571 4.10552C16.6338 4.25708 16.6661 4.41952 16.6661 4.58358C16.6661 4.74763 16.6338 4.91007 16.571 5.06163C16.5083 5.21319 16.4162 5.35091 16.3002 5.46691L11.7686 10.0002L16.3002 14.5336C16.5345 14.7678 16.6661 15.0856 16.6661 15.4169C16.6661 15.7482 16.5345 16.066 16.3002 16.3002C16.066 16.5345 15.7482 16.6661 15.4169 16.6661C15.0856 16.6661 14.7678 16.5345 14.5336 16.3002L10.0002 11.7686L5.46691 16.3002C5.23263 16.5345 4.91489 16.6661 4.58358 16.6661C4.25226 16.6661 3.93452 16.5345 3.70024 16.3002C3.46597 16.066 3.33435 15.7482 3.33435 15.4169C3.33435 15.0856 3.46597 14.7678 3.70024 14.5336L8.23191 10.0002L3.70024 5.46691C3.58413 5.35097 3.49202 5.21327 3.42918 5.0617C3.36633 4.91013 3.33398 4.74766 3.33398 4.58358C3.33398 4.41949 3.36633 4.25702 3.42918 4.10545C3.49202 3.95388 3.58413 3.81618 3.70024 3.70024Z" fill="#F83535"/>
                    </svg>
                    <span class="menu-modal-danger ms-2">Batalkan Transaksi</span>
                </div>
            </a>
        `;
    }

    function printStruk(orderNumber) {
        let konten = document.getElementById("myDiv").innerHTML;
        let body = document.body.innerHTML;

        // Menampilkan konten yang akan dicetak dan menyembunyikan halaman utama
        document.body.innerHTML = '<div id="printedContent"><pre>' + konten + '</pre></div>';

        // Mencetak konten
        window.print();

        // Mengembalikan tampilan halaman utama setelah pencetakan selesai
        document.body.innerHTML = body;
    }
</script>

</body>
</html>
