
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
    <link rel="stylesheet" href="{{ asset('mobile/css/detail-transaksi.css') }}">

</head>
<body>
<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>
<div class="internet-connection-status" id="internetStatus"></div>

<div class="login-back-button">
    <a href="{{ route('login') }}">
        <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
        </svg>
    </a>
</div>
<div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
        <div class="text-center px-4"><img class="login-intro-img" src="{{ asset('mobile/img/laundrymu/logo.png') }}" alt=""></div>
        <div class="register-form mt-4">
            <form action="{{ route('lupaKataSandiProses') }}" method="POST">
                @csrf
                <div class="form-group text-start mb-3">
                    <input class="form-control" type="text" name="email" placeholder="Masukan Email anda" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">Proses Lupa Kata Sandi</button>
            </form>
        </div>
    </div>
</div>

@include('javascript')
<script src="{{ asset('mobile/js/otp-timer.js') }}"></script>
<script src="{{ asset('mobile/js/otp-input-switch.js') }}"></script>

@if($message = Session::get('success'))
    <script>
        Swal.fire({
            html:'<div class="mt-3">' +
                '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
                '<div class="mt-4 pt-2 fs-15">' +
                '<h4>Berhasil !</h4>' +
                '<p class="text-muted mx-4 mb-0">{{ $message }}.</p>' +
                '</div>' +
                '</div>',
            showCancelButton:!0,
            showConfirmButton:!1,
            cancelButtonClass:"btn btn-primary w-xs mb-1",
            cancelButtonText:"Kembali",
            buttonsStyling:!1,
            showCloseButton:!0
        });
    </script>
@endif

@if($message = Session::get('error'))
    <script>
        Swal.fire({
            html:'<div class="mt-3">' +
                '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
                '<div class="mt-4 pt-2 fs-15">' +
                '<h4>Gagal !</h4>' +
                '<p class="text-muted mx-4 mb-0">{{ $message }}</p>' +
                '</div>' +
                '</div>',
            showCancelButton:!0,
            showConfirmButton:!1,
            cancelButtonClass:"btn btn-primary w-xs mb-1",
            cancelButtonText:"Kembali",
            buttonsStyling:!1,
            showCloseButton:!0
        })
    </script>
@endif

</body>
</html>
