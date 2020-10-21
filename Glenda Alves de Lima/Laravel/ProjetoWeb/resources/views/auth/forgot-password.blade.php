
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mais conhecimento</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" > Mais conhecimento</a>

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="navbar-brand js-scroll-trigger" >Home</a>

                    @else
                        <a href="{{ route('login') }}" class="navbar-brand js-scroll-trigger" >Login</a>
                    @if (Route::has('register'))
                    @endif
                @endif
            </div>
        @endif
    </div>
</nav>
<!-- Masthead-->
<header class="masthead" >
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="cartao">
                <div class="card-header  text-light">
                    {{ __(' Esqueceu sua senha?  Basta nos informar seu endereço de   e-mail e nós enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}

                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="mb-6 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-group form-group">

                            <input type="text" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                        </div>

                        <div class="form-group">
                            <input type="submit" id="reset" value="{{ __('Email Password Reset Link') }}" class="btn float-center login_btn form-control">
                        </div>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </div>
</header>


<!-- Footer-->
<footer class="p-2  bg-dark text-white">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <p class="footer-text m-0"> Criado por <a class="text-danger"> Mais Conhecimento </a>|<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados. </a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

