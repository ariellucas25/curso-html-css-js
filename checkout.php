<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <style>
            .navbar {
            margin: 0;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-default">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id"> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Mirror Fashion</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-id">
            <ul class="nav navbar-nav">
                <li class="active"><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas Frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima Escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
        </div>    
    </div>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-lg-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2  class="panel-title">Sua compra</h2>
                </div><!-- fim .panel-heading -->  
                
                <div class="panel-body">

                <img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive hidden-xs">
                    <dl>
                        <dt>Produto</dt>
                        <dd>Fuzzy cardigan</dd>

                        <dt>Cor</dt>
                        <dd>
                            <?= $_POST['cor'] ?>
                        </dd>
                        
                        <dt>Tamanho</dt>
                        <dd>
                            <?= $_POST['tamanho'] ?>
                        </dd>

                        <dt>Preço</dt>
                        <dd>R$ 129,90</dd>
                    </dl>
                </div><!-- Fim do panel body -->
            </div><!-- fim .panel -->
        </div>    
            <form class="col-sm-8 col-lg-9">
                <div class="row">
                    <fieldset class="col-md-6">
                        <legend>Dados Pessoais</legend>
                        
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="sim" name="span" checked>
                                Quero receber span da Mirror Fashion</label>
                        </div>
                    </fieldset>
                    <fieldset class="col-md-6">
                        <legend>Cartão de crédito</legend>
                        <div class="form-group">
                            <label for="numero-cartao">Número - CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        </div>
                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select name="bandeira-cartao" id="bandeira-cartao" calss="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">VISA</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>
                    </fieldset>
                </div>    
                <button type="submit" class="btn btn-primary btn-lg pull-right">
                <span class="glyphicon glyphicon-thumbs-up"></span>    
                Confirmar Pedido</button>
            </form>

        </div>
    </div>    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>