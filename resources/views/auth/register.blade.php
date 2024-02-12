
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/auth/register.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('mobile/css/sweetalert.css') }}">
    <title>Register</title>
</head>
<body>
<section>
    <h1>Daftar Akun</h1>
    <p>Gratis selama 30 hari!</p>
</section>

<div class="form">
    <form action="{{ route('prosesRegister') }}" method="POST" id="submit">
        @csrf
        <div class="mb-2">
            <label for="nama" class="form-label">Nama</label><br>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh : laundry amanah" required>
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email</label><br>
            <input type="email" class="form-control" id="email" name="email" placeholder="Contoh : laundrymu@gmail.com" required>
        </div>
        <div class="mb-2">
            <label for="noHp" class="form-label">No. Hp</label><br>
            <input type="number" class="form-control" id="noHp" name="no_hp" placeholder="Contoh : 08123456789" required>
        </div>
        <div class="mb-2">
            <label for="namaLaundry" class="form-label">Nama Laundry</label><br>
            <input type="text" class="form-control" id="namaLaundry" name="outlet" placeholder="Contoh : Mooda Laundry" required>
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Kata Sandi</label><br>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" value="" required>
                <span class="input-group-text">
                        <i class="fa fa-eye toggle-password" style="cursor: pointer"></i>
                    </span>
            </div>
        </div>
        <div class="mb-2">
            <label for="passwordRepeat" class="form-label">Ulangi Kata Sandi</label><br>
            <div class="input-group">
                <input type="password" class="form-control" id="passwordRepeat" name="password" placeholder="Ulangi kata sandi anda" value="" required>
                <span class="input-group-text">
                        <i class="fa fa-eye toggle-password-repeat" style="cursor: pointer"></i>
                    </span>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center" style="margin-top: 16px">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
            <div style="margin-left: 8px;">
                <div class="text-1">Dengan mendaftar, saya menyatakan telah membaca dan menyetujui Ketentuan <span class="text-2">Layanan</span> & <span class="text-2">Kebijakan LaundryMu</span></div>
            </div>
        </div>

        <div class="d-grid gap-2">
            <a class="btn btn-primary" onclick="submit()">Daftar</a>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <p class="text-3">Sudah punya akun Laundrymu?  <a href="{{ route("login") }}" class="lupa-kata-sandi">Masuk</a></p>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://app.laundrymu.id/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://app.laundrymu.id/assets/js/pages/sweetalerts.init.js"></script>
<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        let input = $($(this).attr("toggle"));
        if (document.getElementById('password').type === "password") {
            document.getElementById('password').type = "text";
        } else {
            document.getElementById('password').type = "password";
        }
    });

    $(".toggle-password-repeat").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        let input = $($(this).attr("toggle"));
        if (document.getElementById('passwordRepeat').type === "password") {
            document.getElementById('passwordRepeat').type = "text";
        } else {
            document.getElementById('passwordRepeat').type = "password";
        }
    });

    function submit() {
        if (document.getElementById('password').value === document.getElementById('passwordRepeat').value) {
            document.getElementById('submit').submit();
        } else {
            Swal.fire({
                html:'<div class="mt-3">' +
                    '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
                    '<div class="mt-4 pt-2 fs-15">' +
                    '<h4>Gagal !</h4>' +
                    `<p class="text-muted mx-4 mb-0">Password harus sama.</p>` +
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
</script>

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
