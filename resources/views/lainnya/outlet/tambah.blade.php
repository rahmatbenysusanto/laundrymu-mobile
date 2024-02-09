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
    <link rel="stylesheet" href="{{ asset('mobile/css/style.css') }}">

</head>
<body style="background: #FFFFFF">

<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>

<div class="internet-connection-status" id="internetStatus"></div>

<div class="header-area" id="headerArea">
    <div class="container">
        <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('outlet') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                    <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                </svg>
            </a>
            <div class="logo-wrapper"><a href="#" class="title-page">Tambah Outlet</a></div>
            <div>

            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container pt-3">
        <div class="row">
            <div class="col-12">
                <div class="mb-2">
                    <label class="form-label">Nama Outlet</label>
                    <input type="text" class="form-control form-control-sm" id="nama">
                </div>
                <div class="mb-2">
                    <label class="form-label">No HP</label>
                    <input type="text" class="form-control form-control-sm" id="no_hp">
                </div>
                <div class="mb-2">
                    <label class="form-label">Provinsi</label>
                    <select class="form-select form-select-sm" id="provinsi" onchange="getProvinsi(this)">
                        <option>Pilih Provinsi</option>
                        @foreach($provinsi as $pro)
                            <option value="{{ $pro->nama_provinsi }}">{{ $pro->nama_provinsi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Kabupaten/Kota</label>
                    <select class="form-select form-select-sm" id="kota" onchange="getKota()">

                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Kecamatan</label>
                    <select class="form-select form-select-sm" id="kecamatan" onchange="getKecamatan()">

                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Kelurahan</label>
                    <select class="form-select form-select-sm" id="kelurahan" onchange="getKelurahan()">

                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Kode POS</label>
                    <select class="form-select form-select-sm" id="kodePos">

                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control form-control-sm" id="alamat"></textarea>
                </div>
                <div class="mb-2">
                    <label for="lisensi" class="form-label">Pilihan Durasi Lisensi</label>
                    <select class="form-select form-select-sm" name="lisensi" id="lisensi" onchange="pilihLisensi(this)">
                        <option>Pilih Durasi Lisensi Outlet</option>
                        @foreach($lisensi as $lis)
                            <option value="{{ $lis->id }}|{{ $lis->nama }}|{{ $lis->harga }}">{{ $lis->nama }} | Rp {{ number_format($lis->harga) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="kodePromo" class="form-label">Kode Promo</label>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="kodePromo" id="kodePromo">
                        <span class="input-group-text cursor-pointer" id="basic-addon2">Cek Kode Promo</span>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="metodePembayaran" class="form-label">Metode Pembayaran</label>
                    <select class="form-select form-select-sm" name="metodePembayaran" id="metodePembayaran" onchange="metodePembayaran(this)">
                        <option>Pilih Metode Pembayaran</option>
                        @foreach($metodePembayaran as $pem)
                            <option value="{{ $pem->id }}|{{ $pem->metode_pembayaran }}">{{ $pem->metode_pembayaran }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-body" style="display: none">
                    <div class="row">
                        <div class="col-6">
                            <p class="fw-bold" id="namaLisensi">Lisensi belum dipilih</p>
                            <p class="fw-bold mb-0" id="namaPembayaran">Pilih Metode Pembayaran</p>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <p class="fw-bold" id="durasiLisensi">Rp 0</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <p class="fw-bold mb-0">Rp 0</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <p class="fw-bold" id="namaLisensi">Total Harga</p>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <p class="fw-bold" id="totalHarga">Rp 0</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary" onclick="prosesPembayaran()">Proses Pembayaran</a>
                    </div>
                </div>
                <div class="mb-4"></div>
            </div>
        </div>
    </div>
</div>

<div class="footer-nav-area" id="footerNav">
    <div class="container">
        <div class="footer-nav position-relative shadow-sm footer-style-two">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li>
                    <a onclick="prosesPembayaran()" class="btn btn-lanjut">Buat Outlet</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@include('javascript')

<script>
    let loadFile = function(event) {
        document.getElementById('output').style.display = 'block';
        document.getElementById('uploadLogoText').innerText = 'Ganti Logo';
        let image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<script>
    localStorage.removeItem('nominalLisensi');
    localStorage.removeItem('lisensiId');
    localStorage.removeItem('metodePembayaran');

    function pilihLisensi(data) {
        let value = data.value;
        let lisensi = value.split('|');
        let namaLisensi = lisensi[1];
        let nominalLisensi = lisensi[2];
        localStorage.setItem('lisensiId', JSON.stringify(lisensi[0]));
        localStorage.setItem('nominalLisensi', JSON.stringify(nominalLisensi));
        document.getElementById('namaLisensi').innerText = "Lisensi Outlet Laundry " + namaLisensi;
        document.getElementById('durasiLisensi').innerText = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        }).format(parseInt(nominalLisensi))

        totalHarga();
    }

    function metodePembayaran(data) {
        let value = data.value;
        let metodePembayaran = value.split("|");
        document.getElementById('namaPembayaran').innerText = metodePembayaran[1];
        localStorage.setItem('metodePembayaran', JSON.stringify(metodePembayaran[0]));

        totalHarga();
    }

    function totalHarga() {
        let lisensi = JSON.parse(localStorage.getItem('nominalLisensi')) ?? 0;

        document.getElementById('totalHarga').innerText = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        }).format(parseInt(lisensi));
    }

    function prosesPembayaran() {
        Swal.fire({
            title:"Apakah anda yakin?",
            text:"Untuk memproses pembayaran ini.",
            icon:"warning",
            showCancelButton:!0,
            confirmButtonText:"Proses Pembayaran",
            cancelButtonText:"Kembali",
            confirmButtonClass:"btn btn-primary w-xs me-2 mt-2",
            cancelButtonClass:"btn btn-danger w-xs mt-2",
            buttonsStyling:!1,showCloseButton:!0
        }).then(function(t) {
            if (t.value) {
                $.ajax({
                    url: '{{ route('createOutlet') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ @csrf_token() }}',
                        nama: document.getElementById('nama').value,
                        no_hp: document.getElementById('no_hp').value,
                        alamat: document.getElementById('alamat').value,
                        provinsi: document.getElementById('provinsi').value,
                        kota: document.getElementById('kota').value,
                        kecamatan: document.getElementById('kecamatan').value,
                        kelurahan: document.getElementById('kelurahan').value,
                        kodePos: document.getElementById('kodePos').value,
                        lisensi: document.getElementById('lisensi').value,
                        kodePromo: document.getElementById('kodePromo').value,
                        metodePembayaran: JSON.parse(localStorage.getItem('metodePembayaran')),
                        harga: JSON.parse(localStorage.getItem('nominalLisensi')),
                        lisensiId: JSON.parse(localStorage.getItem('lisensiId')),
                    },
                    success: function (params) {
                        if (params.status) {
                            Swal.fire({
                                html:'<div class="mt-3">' +
                                    '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
                                    '<div class="mt-4 pt-2 fs-15">' +
                                    '<h4>Berhasil !</h4>' +
                                    '<p class="text-muted mx-4 mb-0">Outlet berhasil dibuat.</p>' +
                                    '</div>' +
                                    '</div>',
                                confirmButtonText:"OK",
                                confirmButtonClass:"btn btn-primary w-xs me-2 mt-2",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            }).then(function (r) {
                                location.replace('{{ route('historiPembayaran') }}');
                            });
                        } else {
                            Swal.fire({
                                html:'<div class="mt-3">' +
                                    '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
                                    '<div class="mt-4 pt-2 fs-15">' +
                                    '<h4>Gagal !</h4>' +
                                    `<p class="text-muted mx-4 mb-0">Outlet gagal dibuat.</p>` +
                                    '</div>' +
                                    '</div>',
                                showCancelButton:!0,
                                showConfirmButton:!1,
                                cancelButtonClass:"btn btn-primary w-xs mb-1",
                                cancelButtonText:"Kembali",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            });
                        }
                    }
                });
            }
        });
    }

    function getProvinsi(data) {
        $.ajax({
            url: '{{ route('getKota') }}',
            method: 'GET',
            data: {
                provinsi: data.value
            },
            success: function (params) {
                let html = '<option>Pilih Kabupaten/Kota</option';
                let dataKota = params.data;

                dataKota.forEach(function (kota) {
                    html += `
                            <option value="${kota.nama_kota}">${kota.nama_kota}</option>
                        `;
                });

                document.getElementById('kota').innerHTML = html;
                document.getElementById('kecamatan').innerHTML = '';
                document.getElementById('kelurahan').innerHTML = '';
                document.getElementById('kodePos').innerHTML = '';
            }
        });
    }

    function getKota() {
        $.ajax({
            url: '{{ route('getKecamatan') }}',
            method: 'GET',
            data: {
                provinsi: document.getElementById('provinsi').value,
                kota: document.getElementById('kota').value
            },
            success: function (params) {
                let html = '<option>Pilih kecamatan</option';
                let dataKota = params.data;

                dataKota.forEach(function (kota) {
                    html += `
                            <option value="${kota.nama_kecamatan}">${kota.nama_kecamatan}</option>
                        `;
                });

                document.getElementById('kecamatan').innerHTML = html;
                document.getElementById('kelurahan').innerHTML = '';
                document.getElementById('kodePos').innerHTML = '';
            }
        });
    }

    function getKecamatan() {
        $.ajax({
            url: '{{ route('getKelurahan') }}',
            method: 'GET',
            data: {
                provinsi: document.getElementById('provinsi').value,
                kota: document.getElementById('kota').value,
                kecamatan: document.getElementById('kecamatan').value
            },
            success: function (params) {
                let html = '<option>Pilih Kelurahan</option';
                let dataKota = params.data;

                dataKota.forEach(function (kota) {
                    html += `
                            <option value="${kota.nama_kelurahan}">${kota.nama_kelurahan}</option>
                        `;
                });

                document.getElementById('kelurahan').innerHTML = html;
                document.getElementById('kodePos').innerHTML = '';
            }
        });
    }

    function getKelurahan() {
        $.ajax({
            url: '{{ route('getKodePos') }}',
            method: 'GET',
            data: {
                provinsi: document.getElementById('provinsi').value,
                kota: document.getElementById('kota').value,
                kecamatan: document.getElementById('kecamatan').value,
                kelurahan: document.getElementById('kelurahan').value
            },
            success: function (params) {
                let dataKota = params.data;

                document.getElementById('kodePos').innerHTML = `<option value="${dataKota[0].nama_kode_pos}">${dataKota[0].nama_kode_pos}</option>`;
            }
        });
    }
</script>

</body>
</html>
