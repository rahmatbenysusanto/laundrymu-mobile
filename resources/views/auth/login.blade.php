
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
    <title>Login</title>
</head>
<body>
<section>
    <h1>Login Akun</h1>
    <p>Nikmati beragam fitur canggih kami!</p>
</section>

<div class="form">
    <form action="{{ route('prosesLogin') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="nama" class="form-label">Email / No HP</label><br>
            <input type="text" class="form-control" id="nama" name="username" placeholder="Contoh : laundrymu@gmail.com">
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Kata Sandi</label><br>
            <div class="input-group">
                <input class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" value="">
                <span class="input-group-text">
                        <i class="fa fa-eye" style="cursor: pointer"></i>
                    </span>
            </div>
        </div>

        <div>
            <a href="#" class="lupa-kata-sandi">Lupa kata sandi?</a>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Masuk</button>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <p class="text-3">Belum punya akun Laundrymu?  <a href="{{ route("register") }}" class="lupa-kata-sandi">Daftar</a></p>
        </div>
    </form>
</div>
</body>
</html>
