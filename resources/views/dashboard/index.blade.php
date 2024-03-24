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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mobile/css/style.css') }}">

</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>
<!-- Internet Connection Status -->
<!-- # This code for showing internet connection status -->
<div class="internet-connection-status" id="internetStatus"></div>
<!-- Header Area -->
<div class="header-area" id="headerArea">
    <div class="container">
        <!-- # Paste your Header Content from here -->
        <!-- # Header Five Layout -->
        <!-- # Copy the code from here ... -->
        <!-- Header Content -->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
            <!-- Logo Wrapper -->
            <div class="logo-wrapper">
                <a href="#" class="title-page">Beranda</a>
            </div>
            <!-- Navbar Toggler -->
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M7.01923 18.1665H7.51923V17.6665V12.2378C7.51923 9.00094 9.68468 6.33141 12.515 5.72673L12.9503 5.63375L12.9084 5.19069C12.8958 5.05742 12.9097 4.92312 12.9488 4.79684C12.9879 4.6706 13.0509 4.55643 13.1322 4.46106C13.2135 4.36578 13.3108 4.29166 13.417 4.24167C13.523 4.19174 13.6363 4.1665 13.75 4.1665C13.8637 4.1665 13.977 4.19174 14.083 4.24167C14.1892 4.29166 14.2865 4.36578 14.3678 4.46106C14.4491 4.55643 14.5121 4.6706 14.5512 4.79684C14.5903 4.92312 14.6042 5.05743 14.5916 5.19069L14.5498 5.63281L14.9839 5.72651C16.3854 6.02903 17.6517 6.83753 18.5647 8.02305C19.4782 9.20907 19.9803 10.6979 19.9808 12.2378C19.9808 12.2379 19.9808 12.2379 19.9808 12.238V17.6665V18.1665H20.4808H21.6923C21.764 18.1665 21.8392 18.1964 21.8995 18.2604C21.9608 18.3254 22 18.4196 22 18.5236C22 18.6276 21.9608 18.7218 21.8995 18.7868C21.8392 18.8508 21.764 18.8808 21.6923 18.8808H20.4808H5.80769C5.736 18.8808 5.66077 18.8508 5.60046 18.7868C5.53921 18.7218 5.5 18.6276 5.5 18.5236C5.5 18.4196 5.5392 18.3254 5.60046 18.2604C5.66077 18.1964 5.736 18.1665 5.80769 18.1665H7.01923ZM15.8924 21.3093C15.8024 21.7548 15.5936 22.1644 15.2899 22.4868C14.8761 22.9258 14.3215 23.1665 13.75 23.1665C13.1785 23.1665 12.6239 22.9258 12.2101 22.4868C11.9064 22.1644 11.6976 21.7548 11.6076 21.3093H15.8924Z" stroke="#404040"/>
                </svg>
            </a>
        </div>
        <!-- # Header Five Layout End -->
    </div>
</div>

<div class="page-content-wrapper">

    <div class="home-background-blue pt-2 position-relative">
        <img class="position-absolute big-logo" src="mobile/img/laundrymu/big-logo.svg" alt="laundrymu">
        <div class="container">
            <p class="text-white home-heading">Hello, MOODA Laundry</p>
            <div class="d-flex align-items-center">
                <p class="home-heading-second">Reguler</p>
                <a class="btn btn-white">Upgrade</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card ringkasan">
            <h3 class="title-ringkasan">Ringkasan Aktivitas LaundryMU</h3>
            <div class="row">
                <div class="col-6">
                    <div class="card-ringkasan">
                        <p class="card-ringkasan-title">Laundry Baru</p>
                        <p class="card-ringkasan-jumlah" id="baru">0</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-ringkasan">
                        <p class="card-ringkasan-title">Laundry Diproses</p>
                        <p class="card-ringkasan-jumlah" id="proses">0</p>
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="card-ringkasan">
                        <p class="card-ringkasan-title">Laundry Selesai</p>
                        <p class="card-ringkasan-jumlah" id="selesai">0</p>
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="card-ringkasan">
                        <p class="card-ringkasan-title">Laundry Diambil</p>
                        <p class="card-ringkasan-jumlah" id="diambil"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3 mb-3">
            <div class="row">
                <div class="col-6">
                    <h3 class="title-ringkasan">Ringkasan Statistik</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card-ringkasan">
                        <p class="card-ringkasan-title">Transaksi</p>
                        <p class="card-ringkasan-jumlah" id="transaksi">0</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-ringkasan">
                        <p class="card-ringkasan-title">Pendapatan</p>
                        <p class="card-ringkasan-jumlah" id="pendapatan">Rp. 0</p>
                    </div>
                </div>
            </div>
            <div class="charts-wrapper mt-3">
                <div id="columnChart2"></div>
            </div>
        </div>
    </div>

</div>

@include('menu')

@include('javascript')
<script src="{{ asset('mobile/js/apexcharts.min.js') }}"></script>

<script>
    localStorage.setItem('dt', JSON.stringify('{{ base64_encode(Session::get('data_user')->id) }}'))

    statusTransaksi();
    transaksiHarian();
    chart();

    async function statusTransaksi() {
        try {
            const getData = await fetch('{{ route('statusLaundry') }}');
            const response = await getData.json();

            document.getElementById('baru').innerText = response.status.baru;
            document.getElementById('proses').innerText = response.status.diproses;
            document.getElementById('selesai').innerText = response.status.selesai;
            document.getElementById('diambil').innerText = response.diambil
        } catch (e) {
            document.getElementById('baru').innerText = '0';
            document.getElementById('proses').innerText = '0';
            document.getElementById('selesai').innerText = '0';
            document.getElementById('diambil').innerText = '0';
        }
    }

    async function transaksiHarian() {
        try {
            const getData = await fetch('{{ route('transaksiHarian') }}');
            const response = await getData.json();

            document.getElementById('transaksi').innerText = response.data.jumlah;
            document.getElementById('pendapatan').innerText = new Intl.NumberFormat("id-ID", {style: "currency", currency: "IDR"}).format(response.data.nominal);
        } catch (e) {

        }
    }

    async function chart() {
        try {
            const getData = await fetch('{{ route('getChart') }}');
            const response = await getData.json();

            var columnChart2 = {
                chart: {
                    height: 240,
                    type: 'bar',
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        speed: 1000
                    },
                    dropShadow: {
                        enabled: true,
                        opacity: 0.1,
                        blur: 2,
                        left: -1,
                        top: 5
                    },
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                        endingShape: 'rounded'
                    },
                },
                colors: ['#00A3FF'],
                dataLabels: {
                    enabled: false
                },
                grid: {
                    borderColor: '#dbeaea',
                    strokeDashArray: 4,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false,
                        }
                    },
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    },
                },
                tooltip: {
                    theme: 'light',
                    marker: {
                        show: true,
                    },
                    x: {
                        show: false,
                    }
                },
                stroke: {
                    show: true,
                    colors: ['transparent'],
                    width: 3
                },
                labels: [
                    '{{ date('d M', strtotime('-7 day')) }}',
                    '{{ date('d M', strtotime('-6 day')) }}',
                    '{{ date('d M', strtotime('-5 day')) }}',
                    '{{ date('d M', strtotime('-4 day')) }}',
                    '{{ date('d M', strtotime('-3 day')) }}',
                    '{{ date('d M', strtotime('-2 day')) }}',
                    '{{ date('d M', strtotime('-1 day')) }}',
                ],
                series: [{
                    name: 'Transaksi',
                    data: response.data
                }],
                xaxis: {
                    crosshairs: {
                        show: true
                    },
                    labels: {
                        offsetX: 0,
                        offsetY: 0,
                        style: {
                            colors: '#8380ae',
                            fontSize: '12px'
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                },
                yaxis: {
                    labels: {
                        offsetX: -10,
                        offsetY: 0,
                        style: {
                            colors: '#8380ae',
                            fontSize: '12px'
                        },
                    }
                },
            }

            var columnChart_02 = new ApexCharts(document.querySelector("#columnChart2"), columnChart2);
            columnChart_02.render();

        } catch (e) {

        }
    }
</script>

</body>
</html>
