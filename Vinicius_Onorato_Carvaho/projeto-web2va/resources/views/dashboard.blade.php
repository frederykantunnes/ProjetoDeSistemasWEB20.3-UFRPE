<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
            <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title>OnEstudos</title>
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        </head>
        <body>
        <div class="wrapper">
        <div class="main-container">
                <div class="cards">
                    <a href="">
                    </a>
                    <div class="card">
                        <div class="card-image1"></div>
                        <div class="card-text">
                            <span class="date">Acesse</span>
                            <h2>Usuário</h2>
                            <p>Acesse e edite os seus dados de usuário da plataforma, encontre também a autenticação de 2 fatores</p>
                        </div>
                        <div class="card-stats">

                            <div class="stat-border-4">
                                <div class="value"><a href="/user/profile"><img src="./images/proximo.png" alt="error"></a></div>
                            </div>
                        </div>
                        <div class="clique-player"><h6>Clique no Player Para Acessar</h6></div>
                    </div>
                    <div class="cards">
                        <a href="">
                        </a>
                        <div class="card">
                            <div class="card-image2"></div>
                            <div class="card-text">
                                <span class="date">Aproveite</span>
                                <h2>Cursos Online</h2>
                                <p>Acesse Nossos Cursos e Aproveite o Conteúdo da Plataforma dividido em Tópicos</p>
                            </div>
                            <div class="card-stats">

                                <div class="stat-border-4">
                                    <div class="value"><a href="/cursos"><img src="./images/proximo.png" alt="error"></a></div>
                                </div>
                            </div>
                            <div class="clique-player"><h6>Clique no Player Para Acessar</h6></div>
                        </div>
                        <div class="card">
                            <div class="card-image3"></div>
                            <div class="card-text">
                                <span class="date">Acesse</span>
                                <h2>Gerenciamento</h2>
                                <p>Gerencie os cursos cadastrados, edite, exclua e crie novos cursos</p>
                            </div>
                            <div class="card-stats">

                                <div class="stat-border-4">
                                    <div class="value"><a href="/admcurso"><img src="./images/proximo.png" alt="error"></a></div>
                                </div>
                            </div>
                            <div class="clique-player"><h6>Clique no Player Para Acessar</h6></div>
                        </div>
                </div>
            </div>
        </div>
        </body>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>
</html>
