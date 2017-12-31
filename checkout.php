<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Ótima Escolha!</h1>
    <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
    <h2>Sua Compra:</h2>
    <dl>
        <dt>Cor</dt>
        <dd><?= $_POST['cor'] ?></dd>

        <dt>Tamanho</dt>
        <dd><?= $_POST['tamanho'] ?></dd>
    </dl>
</body>
</html>