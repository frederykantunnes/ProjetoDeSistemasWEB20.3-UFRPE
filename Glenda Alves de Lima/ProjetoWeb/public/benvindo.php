<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/stylebemvindo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Mais<span>Conhecimento.</span></a>
            </div>
        </div>
</nav>
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-2"> Bem Vindo</div><br>
                <div class="text-1"> A persistência é o melhor caminho do êxito</div><br>
                <div class="text-1"> (Charles Chaplin)</div>
            </div>
        </div>
</section>
    <footer>
        <span>Created By <a href="#">Mais Conhecimento</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
</body>
</html>









                <x-jet-authentication-card>
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>

                    <x-jet-validation-errors class="mb-2" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

   
                </x-jet-authentication-card>
            </x-guest-layout>



