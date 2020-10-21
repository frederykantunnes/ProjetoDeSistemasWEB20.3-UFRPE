<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="storage/images/bg-02.png">
    <link rel="icon" type="image/png" href="storage/images/bg-02.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Plataforma de Estudos</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gsdk.css" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/">
                        <div class="logo-container">
                            <div class="logo">
                                    <img src="https://png.pngtree.com/png-clipart/20190705/original/pngtree-cartoon-color-book-elements-png-image_4182519.jpg">
                            </div>
                            <div class="brand">
                                Estude Online
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}" class="btn btn-round btn-default">Register</a></li>

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->

    <div class='blurred-container'>
        <div class="motto">
            <div>ESTUDE</div>
            <div>Online</div>
            <div>Agora!</div>
        </div>
        <div class="img-src" style="background-image: url('https://estadodaarte.estadao.com.br/wp-content/uploads/2019/10/read.jpg')"></div>
        <div class='img-src blur' style="background-image: url('assets/img/cover_4_blur.jpg')"></div>
    </div>

</div>



<div class="main">
</div>
<div id="navbar-full">
    <div id="navbar">
    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->

<div class="main">
</div>

<div class="main">
</div>
<div class="main">
    <div class="container tim-container">
        <div id="extras">
            <div class="space"></div>
            <div class="row">
                <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="text-center">
                        <img src="assets/img/dulau.png" alt="Rounded Image" class="img-rounded img-responsive img-dog">
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <h1 class="text-center">Cursos gratuitos

                        <small class="subtitle">não perca tempo!</small></h1>
                    <hr>
                    <p>
                        Nossa plataforma contém diversos para aproveitar e dar aquele upgrade na sua carreira como full stack, desde html a php avançado.
                    </p>
                    <p>
                         Corra e aproveite, todos os cursos são gratuitos, não precisa pagamento, ao se cadastrar na plataforma você já tem acesso a todos os cursos disponíveis.
                    </p>
                    <p>
                        Caso queira cadastrar mais algum curso, também é possível apartir da parte administrativa dos cursos, gerenciar, editar e excluir os cursos desejados!
                    </p>

                </div>
            </div>
        </div>
        <!--     end extras -->
    </div>
    <!-- end container -->
    <div class="space-30"></div>
</div>
<div id="carousel">
    <!--
            IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition". Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"

    -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="assets/img/car01.png" alt="Awesome Image">
            </div>
            <div class="item">
                <img src="assets/img/car02.png" alt="Awesome Image">
            </div>
            <div class="item">
                <img src="assets/img/car03.png" alt="Awesome Image">
            </div>
            <div class="item">
                <img src="assets/img/user.png" alt="Awesome Image">
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
        </a>
    </div>
</div> <!-- end carousel -->



<!-- end main -->

<div class="parallax-pro">
    <div class="img-src" style="background-image: url('https://guiadoestudante.abril.com.br/wp-content/uploads/sites/4/2019/04/saiba-como-elaborar-um-cronograma-de-estudos-infalc3advel.png');"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    <small>
                        Esta é nossa platsforma:<a>
                    </small>
                </h1>
            </div>
            <div class="col-md-6 col-md-offset-3 col-md-12 text-center">
                <h1 class="hello text-center">
                    <a href="{{route('register')}}">Estude na OnEstudos <span class="label label-warning"> now!</span></a>
                    <small>
                        <ul class="list-unstyled">
                            <li>Plataforma Gratuíta</li>
                            <li>Vários Cursos</li>
                            <li>Gerenciamento de Cursos</li>
                            <li>Upgrade no seu Aprendizado</li>
                        </ul>
                    </small>
                </h1>
                <div class="actions">
                    <a class="btn btn-lg btn-warning btn-fill" href="{{route('register')}}">Cadastre-se já!</a>
                </div>
            </div>
        </div>
        <div class="space-30"></div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="credits">
                    &copy; <script>document.write(new Date().getFullYear())</script> Plataforma criada por <a href="http://creative-tim.com"> Vinicius Carvalho</a>, utilizando framework <i class="fa fa-heart heart" alt="love"></i> laravel pra web.
                </div>
            </div>
        </div>
    </div>

</div>

</body>

<script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
<script src="assets/js/gsdk-checkbox.js"></script>
<script src="assets/js/gsdk-radio.js"></script>
<script src="assets/js/gsdk-bootstrapswitch.js"></script>
<script src="assets/js/get-shit-done.js"></script>
<script src="assets/js/custom.js"></script>

<script type="text/javascript">

    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
            var display_buttons = display_div.find('.btn');
            display_buttons.removeClass(old_class);
            display_buttons.addClass(new_class);
            display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
    });
    $( "#slider-default" ).slider({
        value: 70,
        orientation: "horizontal",
        range: "min",
        animate: true
    });
    $('.carousel').carousel({
        interval: 4000
    });


</script>
</html>
