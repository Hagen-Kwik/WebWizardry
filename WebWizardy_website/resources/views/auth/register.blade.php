<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="icon" href="logo.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/owl.css">


    {{-- change title here --}}
    <title>
Register
    </title>

</head>

@include('layouts.header')

    <div class="d-flex flex-row justify-content-center">
        <div class="d-flex col-lg-6 justify-content-center align-items-center" style="height: 100vh">
            <div class="d-flex align-items-center justify-content-center flex-column w-100">
                <h2 class="fw-bold pt-4">Selamat Bergabung!</h2>
                <p>Silahkan isi data diri Anda</p>
                <form action="{{ route('register') }}" method="post" class="w-75">
                    @csrf
                    <div class="mb-3 mt-4">
                        <input type="email" class="form-control font-montserrat" id="inputEmail" name="email" placeholder="Email" required autofocus>
                        {{-- <small class="text-danger font-montserrat">
                        @foreach ($errors->get('email') as $err)
                            {{ ucfirst($err) }}
                        @endforeach
                        </small> --}}
                    </div>
                    <div class="mb-3 mt-4">
                        <input type="password" class="form-control font-montserrat" id="inputPassword" name="kata_sandi" placeholder="Kata Sandi" required autocomplete="current-password">
                        {{-- <small class="text-danger font-montserrat">
                        @foreach ($errors->get('kata_sandi') as $err)
                            {{ ucfirst($err) }}
                        @endforeach
                        </small> --}}
                    </div>
                    <div class="mb-5">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary font-montserrat fw-semibold py-2 px-4">Daftar</button>
                    </div>
                </form>
                <h6 class="font-montserrat fw-semibold mt-3 mx-4 text-center">Sudah mempunyai akun? <span class="color-orange fw-bold"><a href="/login" class="text-decoration-none color-orange">Masuk Di Sini!</a></span></h6>
            </div>
        </div>
        <div class="d-flex d-none d-lg-flex col-6 justify-content-center align-items-center" style="height: 100vh; background-color: #F9F9F4;">
            <img src="{{ asset('images/slider-dec.png') }}" style="width: 25vw">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

