
<?php 
$css_produto = '<link rel="stylesheet" href="css/produto.css">';
$cabecalho_title = "Produto";
include("cabecalho.php"); 

?>
<div class="produto-back">
    <div class="container">
        <div class="produto">
            <h1>Fuzzy Cardigan</h1>
            <p>por apenas R$ 129,90</p>
            <form action="checkout.php" method="POST">
                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                        <label for="verde">
                            <img src="img/produtos/foto2-verde.png" alt="verde">
                        </label>
                    <input type="radio" name="cor" value="rosa" id="rosa" checked>
                        <label for="rosa">
                            <img src="img/produtos/foto2-rosa.png" alt="rosa">
                        </label>
                    <input type="radio" name="cor" value="azul" id="azul" checked>
                        <label for="azul">
                            <img src="img/produtos/foto2-azul.png" alt="azul">
                        </label>        
                </fieldset>
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                </fieldset>
                <input type="submit" class="comprar" value="comprar">
            </form>
        </div>
        <div class="detalhes">
            <h2>Detalhes do produto</h2>
            <p>Esse é o melhor casaco de Cartigã que você já viu. Excelente material 
                italiano com estampa desenhada pelos artesãos da comunidade de Krotor 
                nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a Jato.</p>
            <table>
                <thead>
                    <tr>
                        <th>Características</th>
                        <th>Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cartigã</td>
                    </tr>
                    <tr>
                        <td>material</td>
                        <td>Algodão e Poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("rodape.php"); ?>
