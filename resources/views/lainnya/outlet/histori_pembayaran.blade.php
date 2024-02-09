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
            margin-bottom: 0;
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
            <a href="{{ route('lainnya') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                    <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                </svg>
            </a>
            <div class="logo-wrapper"><a href="#" class="title-page">Histori Pembayaran</a></div>
            <div>

            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container pt-3">
        <div class="row">
            <div class="col-12">
                @foreach($pembayaran as $pem)
                    <div class="card card-white p-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="text-tanggal">Tanggal Kadaluarsa</p>
                            @if($pem->status == "transfer")
                                <div class="status-pembayaran-success">Lunas</div>
                            @elseif($pem->status == "menunggu pengecekan")
                                <div class="status-pembayaran-warning">Verifikasi</div>
                            @else
                                <div class="status-pembayaran-danger">Belum Lunas</div>
                            @endif
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="tanggal">{{ tanggal_jam_indo($pem->created_at) }}</p>
                        </div>
                        <div class="line"></div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="nama-outlet">{{ $pem->toko->nama }}</p>
                            <p class="text-reguler">{{ $pem->lisensi->nama }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-reguler">{{ $pem->pembayaran->nomor }}</p>
                            <p class="text-reguler">Rp{{ number_format($pem->lisensi->harga) }}</p>
                        </div>
                        <div class="line"></div>
                        <a href="/pembayaran-outlet/{{ $pem->nomor_pembayaran }}" class="btn btn-blue">
                            @if($pem->bukti_transfer == null)
                                Upload Bukti Pembayaran
                            @else
                                Lihat Bukti Pembayaran
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@include('javascript')

@include('menu')

</body>
</html>
