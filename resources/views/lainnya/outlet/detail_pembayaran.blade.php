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
    <style>
        .text-tanggal {
            color: #262626;
            font-family: Gantari, sans-serif;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: 16px;
            margin-bottom: 4px;
        }

        .tanggal {
            color: #616161;
            font-family: Gantari, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: -0.084px;
            margin-bottom: 16px;
        }

        .line {
            border-top: 1px solid rgba(67, 67, 67, 0.24);
            margin-bottom: 16px;
            margin-top: 16px;
        }

        .nama-outlet {
            color: #262626;
            font-family: Gantari, sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 24px;
            letter-spacing: -0.176px;
            margin-bottom: 4px;
        }

        .text-reguler {
            color: #616161;
            text-align: right;
            font-family: Gantari, sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: -0.176px;
            margin-bottom: 0;
        }

        .text-value {
            color: #262626;
            font-family: Gantari, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: -0.084px;
            margin-bottom: 16px;
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
            <a href="{{ route('historiPembayaran') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                    <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                </svg>
            </a>
            <div class="logo-wrapper"><a href="#" class="title-page">Detail Pembayaran</a></div>
            <div>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M4.8125 24.5C4.00027 24.5 3.22132 24.1773 2.64699 23.603C2.07266 23.0287 1.75 22.2497 1.75 21.4375V17.0625C1.75 16.7144 1.88828 16.3806 2.13442 16.1344C2.38056 15.8883 2.7144 15.75 3.0625 15.75C3.4106 15.75 3.74444 15.8883 3.99058 16.1344C4.23672 16.3806 4.375 16.7144 4.375 17.0625V21.4375C4.375 21.679 4.571 21.875 4.8125 21.875H23.1875C23.3035 21.875 23.4148 21.8289 23.4969 21.7469C23.5789 21.6648 23.625 21.5535 23.625 21.4375V17.0625C23.625 16.7144 23.7633 16.3806 24.0094 16.1344C24.2556 15.8883 24.5894 15.75 24.9375 15.75C25.2856 15.75 25.6194 15.8883 25.8656 16.1344C26.1117 16.3806 26.25 16.7144 26.25 17.0625V21.4375C26.25 22.2497 25.9273 23.0287 25.353 23.603C24.7787 24.1773 23.9997 24.5 23.1875 24.5H4.8125Z" fill="#262626"/>
                        <path d="M12.6877 13.4558V3.5C12.6877 3.1519 12.8259 2.81806 13.0721 2.57192C13.3182 2.32578 13.6521 2.1875 14.0002 2.1875C14.3483 2.1875 14.6821 2.32578 14.9282 2.57192C15.1744 2.81806 15.3127 3.1519 15.3127 3.5V13.4558L18.7602 10.01C18.882 9.8882 19.0266 9.79158 19.1857 9.72566C19.3448 9.65974 19.5154 9.62582 19.6877 9.62582C19.8599 9.62582 20.0305 9.65974 20.1896 9.72566C20.3488 9.79158 20.4934 9.8882 20.6152 10.01C20.737 10.1318 20.8336 10.2764 20.8995 10.4355C20.9654 10.5947 20.9993 10.7652 20.9993 10.9375C20.9993 11.1098 20.9654 11.2803 20.8995 11.4395C20.8336 11.5986 20.737 11.7432 20.6152 11.865L14.9277 17.5525C14.8059 17.6744 14.6613 17.7711 14.5022 17.8371C14.343 17.9031 14.1724 17.9371 14.0002 17.9371C13.8279 17.9371 13.6573 17.9031 13.4981 17.8371C13.339 17.7711 13.1944 17.6744 13.0727 17.5525L7.38516 11.865C7.26336 11.7432 7.16674 11.5986 7.10082 11.4395C7.0349 11.2803 7.00098 11.1098 7.00098 10.9375C7.00098 10.7652 7.0349 10.5947 7.10082 10.4355C7.16674 10.2764 7.26336 10.1318 7.38516 10.01C7.50696 9.8882 7.65156 9.79158 7.8107 9.72566C7.96984 9.65974 8.14041 9.62582 8.31266 9.62582C8.48491 9.62582 8.65548 9.65974 8.81462 9.72566C8.97376 9.79158 9.11836 9.8882 9.24016 10.01L12.6877 13.4558Z" fill="#262626"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container pt-3">
        <div class="row">
            <div class="col-12">
                <div class="card card-white p-2 mb-3">
                    <p class="nama-outlet mb-3">Info Pembayaran</p>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">No Pembayaran</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->nomor_pembayaran }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">Tipe Lisensi</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->lisensi->nama }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">Nominal</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">Rp {{ number_format($pembayaran->lisensi->harga) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">Metode Pembayaran</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->pembayaran->metode_pembayaran }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">Transfer Ke</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->pembayaran->nomor }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">Atas Nama</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->pembayaran->nama }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-2">
        <div class="row">
            <div class="col-12">
                <div class="card card-white p-2 mb-3">
                    <p class="nama-outlet mb-3">Info Outlet</p>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">Nama Outlet</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->toko->nama }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">No HP</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->toko->no_hp }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="tanggal">Alamat</p>
                        </div>
                        <div class="col-7">
                            <p class="text-value">{{ $pembayaran->toko->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-2">
        <div class="row">
            <div class="col-12">
                <div class="card card-white p-2 mb-3">
                    <p class="nama-outlet mb-3">Upload Bukti Pembayaran</p>
                    @if($pembayaran->bukti_transfer != null)
                        <img src="{{ asset('bukti_pembayaran/'.$pembayaran->bukti_transfer) }}" alt="bukti_transfer" width="50%">
                    @else
                        <form action="{{ route('uploadBuktiPembayaran') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $pembayaran->id }}" name="pembayaran_id">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <button type="submit" class="btn btn-blue">Upload Bukti Pembayaran</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@include('javascript')

@include('menu')

</body>
</html>
