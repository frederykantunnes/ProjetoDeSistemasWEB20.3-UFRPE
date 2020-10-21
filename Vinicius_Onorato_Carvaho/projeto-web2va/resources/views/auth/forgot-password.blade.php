<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/storage/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/storage/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/storage/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/storage/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/storage/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/storage/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/storage/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/storage/css/util.css">
    <link rel="stylesheet" type="text/css" href="/storage/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-b-160 p-t-50">
            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <span class="login100-form-title p-b-43">
						Recuperar senha
                        <h6><x-jet-validation-errors /></h6>

					</span>

                <div class="wrap-input100 container-login100-form-btn rs1 rs2 validate-input" data-validate = "Username is required">
                    <input class="input100" id="email" type="email" name="email" required>
                    <span class="label-input100">Digite seu email</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Recuperar senha
                    </button>
                </div>

                <div class="text-center w-full p-t-23">
                    <a href="/" class="txt1">Voltar pra início?</a>
                </div>

            </form>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="/storage/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/storage/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/storage/vendor/bootstrap/js/popper.js"></script>
<script src="/storage/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/storage/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/storage/vendor/daterangepicker/moment.min.js"></script>
<script src="/storage/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/storage/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/storage/js/main.js"></script>

</body>
</html>
