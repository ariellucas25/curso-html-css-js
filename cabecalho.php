<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php print $cabecalho_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width">
    <?php print @$css_sobre; ?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css" />
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <?php print @$css_produto; ?>
    <script src="main.js"></script>
</head>
<header class="container">
        <h1>
            <a href="index.php">
                <img src="img/logo.png" alt="Mirror Fashion">
            </a> 
        </h1>
        <p class="sacola">Nenhum item na
            <br> sacola de compras</p>
        <nav class="menu-opcoes">
            <ul>
                <li>
                    <a href="#">Sua Conta</a>
                </li>
                <li>
                    <a href="#">Lista de Desejos</a>
                </li>
                <li>
                    <a href="#">Cartão de Fidelidade</a>
                </li>
                <li>
                    <a href="sobre.php">Sobre</a>
                </li>
                <li>
                    <a href="#">Ajuda</a>
                </li>
            </ul>
        </nav>
    </header>