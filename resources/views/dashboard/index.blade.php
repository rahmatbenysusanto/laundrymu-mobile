
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/dashboard/dashboard.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/dashboard/menu.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">

    <title>Dashboard</title>
</head>
<body>
<section id="top-navbar">
    <div class="d-flex justify-content-between justify-content-center align-content-center">
        <span class="navbar-top-title">Beranda</span>
        <div>
            <i class="fa-regular fa-bell fa-1x"></i>
        </div>
    </div>
</section>

<section id="page">
    <div class="banner-home d-flex justify-content-between">
        <div>
            <span class="laundry-name">Halo, {{ Session::get("data_user")->nama }}!</span>
            <div class="d-flex align-content-center align-items-center" style="margin-top: 8px;">
                <span class="type-member">Reguler</span>
                <a class="btn-upgrade">Upgrade</a>
            </div>
        </div>
        <img class="banner-logo" src="assets/img/beranda-logo.svg" alt="logo">
    </div>

    <div class="ringkasan">
        <div class="d-flex align-items-center">
            <p class="ringkasan-title">Ringkasan Aktivitas LaundryMU</p>
            <i class="fa-regular fa-circle-info"></i>
        </div>
        <div class="ringkasan-body">
            <div class="row">
                <div class="col-6">
                    <div class="ringkasan-box">
                        <p class="ringkasan-box-title">Laundry Baru</p>
                        <p class="ringkasan-box-qty">0</p>
                        <div class="d-flex align-items-center">
                            <a href="#" class="ringkasan-btn">Lihat Detail</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M3.75 2.5L6.25 5L3.75 7.5" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="ringkasan-box">
                        <p class="ringkasan-box-title">Diproses</p>
                        <p class="ringkasan-box-qty">0</p>
                        <div class="d-flex align-items-center">
                            <a href="#" class="ringkasan-btn">Lihat Detail</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M3.75 2.5L6.25 5L3.75 7.5" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 24px">
                    <div class="ringkasan-box">
                        <p class="ringkasan-box-title">Selesai</p>
                        <p class="ringkasan-box-qty">0</p>
                        <div class="d-flex align-items-center">
                            <a href="#" class="ringkasan-btn">Lihat Detail</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M3.75 2.5L6.25 5L3.75 7.5" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 24px">
                    <div class="ringkasan-box">
                        <p class="ringkasan-box-title">Diambil</p>
                        <p class="ringkasan-box-qty">0</p>
                        <div class="d-flex align-items-center">
                            <a href="#" class="ringkasan-btn">Lihat Detail</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M3.75 2.5L6.25 5L3.75 7.5" stroke="#262626" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('menu')

<script src="{{ asset("assets/js/bootstrap.js") }}"></script>
<script>
    generate();
    function generate() {
        localStorage.setItem("hash", "{{ Session::get("token") }}");
        localStorage.setItem("dt", "{{ base64_encode(Session::get("data_user")->id) }}");
    }
</script>
</body>
</html>
