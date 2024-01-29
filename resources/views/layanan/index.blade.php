<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div class="logo-wrapper"><a href="#" class="title-page">Daftar Layanan</a></div>
            <div class="user-profile-wrapper">
                <a href="{{ route('tambahLayanan') }}" class="text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">

    <section id="list-transaksi-header">
        <div class="container">
            <div class="pb-3 pt-3">
                <input type="text" class="form-control" placeholder="Cari nama layanan">
            </div>
        </div>
    </section>

    <div class="mt-3"></div>
    <div class="container">
        <table class="w-100">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($layanan as $lay)
                    <tr>
                        <td>
                            <div class="card p-2 mb-3">
                                <p class="text-nama">{{ $lay->nama }}</p>
                                <p class="text-tipe">{{ $lay->type }}</p>
                                <p class="text-harga">Rp.{{ number_format($lay->harga) }}</p>
                                <div class="row mt-3">
                                    <div class="col-10">
                                        <a class="btn btn-putih">Ubah</a>
                                    </div>
                                    <div class="col-2">
                                        <a onclick="pilihan('{{ $lay->id }}')" class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9 15.25C9 14.9185 9.1317 14.6005 9.36612 14.3661C9.60054 14.1317 9.91848 14 10.25 14C10.5815 14 10.8995 14.1317 11.1339 14.3661C11.3683 14.6005 11.5 14.9185 11.5 15.25C11.5 15.5815 11.3683 15.8995 11.1339 16.1339C10.8995 16.3683 10.5815 16.5 10.25 16.5C9.91848 16.5 9.60054 16.3683 9.36612 16.1339C9.1317 15.8995 9 15.5815 9 15.25ZM9 10.25C9 9.91848 9.1317 9.60054 9.36612 9.36612C9.60054 9.1317 9.91848 9 10.25 9C10.5815 9 10.8995 9.1317 11.1339 9.36612C11.3683 9.60054 11.5 9.91848 11.5 10.25C11.5 10.5815 11.3683 10.8995 11.1339 11.1339C10.8995 11.3683 10.5815 11.5 10.25 11.5C9.91848 11.5 9.60054 11.3683 9.36612 11.1339C9.1317 10.8995 9 10.5815 9 10.25ZM9 5.25C9 4.91848 9.1317 4.60054 9.36612 4.36612C9.60054 4.1317 9.91848 4 10.25 4C10.5815 4 10.8995 4.1317 11.1339 4.36612C11.3683 4.60054 11.5 4.91848 11.5 5.25C11.5 5.58152 11.3683 5.89946 11.1339 6.13388C10.8995 6.3683 10.5815 6.5 10.25 6.5C9.91848 6.5 9.60054 6.3683 9.36612 6.13388C9.1317 5.89946 9 5.58152 9 5.25Z" fill="#262626"></path>
                                            </svg>
                                        </a>
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


@include('menu')

@include('javascript')

<script>
    function pilihan(id) {
        $("#pilihan").modal("show");
        document.getElementById('modalPilihan').innerHTML = `
             <a href="">
                <div class="d-flex align-items-center align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99984 10.2483V12.0003C9.46941 12.0003 8.9607 11.7896 8.58563 11.4145C8.21056 11.0395 7.99984 10.5308 7.99984 10.0003C7.99984 9.46989 8.21056 8.96118 8.58563 8.58611C8.9607 8.21104 9.46941 8.00033 9.99984 8.00033V10.2483ZM9.99984 6.66699C9.11579 6.66699 8.26794 7.01818 7.64282 7.6433C7.0177 8.26842 6.66651 9.11627 6.66651 10.0003C6.66651 10.8844 7.0177 11.7322 7.64282 12.3573C8.26794 12.9825 9.11579 13.3337 9.99984 13.3337V17.3337C6.41851 17.3337 3.91851 15.5363 2.33718 13.7803C1.47501 12.8162 0.752412 11.7359 0.190512 10.571C0.144534 10.4732 0.100525 10.3745 0.0585115 10.275L0.0505115 10.2563L0.0491782 10.251L0.0478448 10.2483C-0.0159483 10.0891 -0.0159483 9.91151 0.0478448 9.75233L0.135845 9.78833C0.106175 9.77669 0.0768305 9.76557 0.0478448 9.75233V9.74966L0.0505115 9.74433L0.0585115 9.72566C0.0996243 9.62553 0.144094 9.5268 0.191845 9.42966C0.753838 8.26519 1.47644 7.18533 2.33851 6.22166C3.91718 4.46433 6.41718 2.66699 9.99984 2.66699V6.66699ZM9.99984 8.00033V12.0003C10.5303 12.0003 11.039 11.7896 11.4141 11.4145C11.7891 11.0395 11.9998 10.5308 11.9998 10.0003C11.9998 9.46989 11.7891 8.96118 11.4141 8.58611C11.039 8.21104 10.5303 8.00033 9.99984 8.00033ZM9.99984 13.3337C10.8839 13.3337 11.7317 12.9825 12.3569 12.3573C12.982 11.7322 13.3332 10.8844 13.3332 10.0003C13.3332 9.11627 12.982 8.26842 12.3569 7.6433C11.7317 7.01818 10.8839 6.66699 9.99984 6.66699V2.66699C13.5812 2.66699 16.0812 4.46433 17.6625 6.22166C18.5246 7.18531 19.2472 8.26517 19.8092 9.42966C19.8551 9.52745 19.8991 9.62613 19.9412 9.72566L19.9478 9.74433L19.9505 9.74966L19.9518 9.75233C20.0156 9.91151 20.0156 10.0891 19.9518 10.2483V10.251L19.9478 10.2563L19.9412 10.275C19.9004 10.3752 19.8559 10.474 19.8078 10.571C19.2459 11.7355 18.5233 12.8153 17.6612 13.779C16.0825 15.5363 13.5825 17.3337 9.99984 17.3337V13.3337Z" fill="#262626"/>
                    </svg>
                    <span class="menu-modal ms-2">Lihat Layanan</span>
                </div>
            </a>
            <div class="mb-3"></div>
            <a href="">
                <div class="d-flex align-items-center align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3.70024 3.70024C3.81618 3.58413 3.95388 3.49202 4.10545 3.42918C4.25702 3.36633 4.41949 3.33398 4.58358 3.33398C4.74766 3.33398 4.91013 3.36633 5.0617 3.42918C5.21327 3.49202 5.35097 3.58413 5.46691 3.70024L10.0002 8.23191L14.5336 3.70024C14.6496 3.58424 14.7873 3.49222 14.9389 3.42944C15.0904 3.36667 15.2529 3.33435 15.4169 3.33435C15.581 3.33435 15.7434 3.36667 15.895 3.42944C16.0465 3.49222 16.1842 3.58424 16.3002 3.70024C16.4162 3.81624 16.5083 3.95396 16.571 4.10552C16.6338 4.25708 16.6661 4.41952 16.6661 4.58358C16.6661 4.74763 16.6338 4.91007 16.571 5.06163C16.5083 5.21319 16.4162 5.35091 16.3002 5.46691L11.7686 10.0002L16.3002 14.5336C16.5345 14.7678 16.6661 15.0856 16.6661 15.4169C16.6661 15.7482 16.5345 16.066 16.3002 16.3002C16.066 16.5345 15.7482 16.6661 15.4169 16.6661C15.0856 16.6661 14.7678 16.5345 14.5336 16.3002L10.0002 11.7686L5.46691 16.3002C5.23263 16.5345 4.91489 16.6661 4.58358 16.6661C4.25226 16.6661 3.93452 16.5345 3.70024 16.3002C3.46597 16.066 3.33435 15.7482 3.33435 15.4169C3.33435 15.0856 3.46597 14.7678 3.70024 14.5336L8.23191 10.0002L3.70024 5.46691C3.58413 5.35097 3.49202 5.21327 3.42918 5.0617C3.36633 4.91013 3.33398 4.74766 3.33398 4.58358C3.33398 4.41949 3.36633 4.25702 3.42918 4.10545C3.49202 3.95388 3.58413 3.81618 3.70024 3.70024Z" fill="#F83535"/>
                    </svg>
                    <span class="menu-modal-danger ms-2">Hapus Layanan</span>
                </div>
            </a>
        `;
    }
</script>

</body>
</html>
