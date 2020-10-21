
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mais Conhecimento</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- =======================================================
    * Template Name: iPortfolio - v1.4.1
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTKAfBjXyE5y3Gr0Qke8zu9kczrk3WVvEhSXg&usqp=CAU" class="img-fluid rounded-circle">
            <h1 class="text-light"><a >{{ Auth::user()->name}} </a></h1>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href=" {{route('dashboard')}}"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href=" {{route('trabalhos.create')}}"><i class="bx bxs-book"></i> <span>Cadastro De Trabalhos</span></a></li>
                <li><a href="{{route('pesquisa.show', Auth::user()->id)}}"><i class="bx bx-file-blank"></i> <span>Meus Arquivos</span></a></li>
                <li><a href="{{route('trabalhos.index')}}"><i class="bx bx-book-content"></i> Lista de Trabalhos</a></li>
                <li><a href="{{ route('profile.show') }}"><i class="bx bx-book-content"></i> Perfil</a></li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="b"><li><a> <i class="bx bx-book-content"></i>Logout</a></li></button>
              </form>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->
<main id="main" >
    <div class="m-3">
        @include('flash::message')
    </div>
    @yield('content');
</main>

<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy;<strong><span class="text-danger"> Mais Conhecimento</span></strong>
        </div>
        <div class="credits">
            |<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados. </a> </p>

        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->



<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('vendor/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor/venobox/venobox.min.js')}}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('vendor/typed.js/typed.min.js')}}"></script>
<script src="{{ asset('vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js')}}"></script>
<script src="{{ asset('js/table.js')}}"></script>

<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- App scripts -->

<script>$('div.alert').not('.alert-important').delay(3000).fadeOut(350);</script>
</body>

</html>
