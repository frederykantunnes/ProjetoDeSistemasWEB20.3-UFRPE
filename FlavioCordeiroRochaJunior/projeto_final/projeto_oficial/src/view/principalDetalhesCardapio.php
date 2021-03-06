<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard funcionario</title>
    <script type="text/javascript" src="./script/jquery.js"></script>
    <link rel="stylesheet" href="./css/style_principal_funcionario.css">
</head>
<body>
<header>
    <div class="menu">
        <div class="opcoes">
            <nav>

                <button class="botao_menu" id="btnCardapio">Cardápio</button>
                <button class="botao_menu"  id="btnPedido">Pedido</button>
                <button class="botao_menu"  id="btnSobre">Usuário</button>
                <?php if($_SESSION['user'] == "adm"){
                    echo '<button type="submit" class="botao_menu"  id="btnFuncionario">Funcionario</button>';
                }?>
            </nav>
        </div>

        <div class="container_usuario">

            <div class="dados_usuario" id="dados_usuario">
                <label for=""><?php echo $_SESSION['email'];?></label>
                <label for=""><?php echo $_SESSION['user'];?></label>
            </div>

        </div>
        <div class="drop-menu" id="drop-menu">

            <?php
            if ($_SESSION['user']!="adm") {
                $id_s = $_SESSION['id'];
                echo "<a href='/usuario?edit&id={$id_s}'>";
                echo "<button class='itens-drop-menu' id='btnEditar' name='editar'>Editar dados</button><br>";
                echo "</a>";
            } ?>
            <form action="/logout" method="get">
                <button type="submit" class="itens-drop-menu" id="btnSair"  name="sair">Sair</button>
            </form>

        </div>

    </div>
</header>

<div class="fundo">
    <div class="sub-fundo">

        <div class="caixa-cadastro">

                <fieldset class="caixa-dados">
                    <legend class="legenda">Dados:</legend>
                    <label for="" class="label-titulo-detalhe">Nome: </label>
                    <label for="" class="label-dados"><?php echo $retorno->getNome() ?></label><br>
                    <label for="" class="label-titulo-detalhe">Preço: </label>
                    <label for="" class="label-dados"><?php echo $retorno->getPreco() ?></label><br>
                    <label for="" class="label-titulo-detalhe">Engredientes: </label>
                    <label for="" class="label-dados"><?php echo $retorno->getIngredientes() ?></label><br>
                    <label for="" class="label-titulo-detalhe">Tipo: </label>
                    <label for="" class="label-dados"><?php echo $retorno->getTipo() ?></label><br>

                </fieldset>
            <form action="/cardapio?index" method="get">
                <button type="submit" class="botao-voltar">Voltar</button>
            </form>




        </div>



    </div>
</div>
<script type="text/javascript" src="./script/controllerPrincipalFuncionario.js"></script>
</body>
</html>
