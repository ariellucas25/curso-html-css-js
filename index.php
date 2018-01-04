<?php 
$cabecalho_title = "Loja Mirror Fashion";
include("cabecalho.php"); ?>

<body>

    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>
            <form>
                <input type="search">
                <input type="image" src="img/busca.png" class="lupa">
            </form>
        </section>
        <!--Fim da busca-->

        <section class="menu-departamentos">
            <h2>Departamentos</h2>
            <nav>
                <ul>
                    <li>
                        <a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga Curta</a></li>
                            <li><a href="#">MAnga Comprida</a></li>
                            <li><a href="#">Camisa Social</a></li>
                            <li><a href="#">Camisa Casual</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Calças</a>
                    </li>
                    <li>
                        <a href="#">Saias</a>
                    </li>
                    <li>
                        <a href="#">Vestidos</a>
                    </li>
                    <li>
                        <a href="#">Sapatos</a>
                    </li>
                    <li>
                        <a href="#">Bolsas e Carteiras</a>
                    </li>
                    <li>
                        <a href="#">Acessórios</a>
                    </li>
                </ul>
            </nav>
        </section>
        <!-- Fim menú departamentos -->

        <img src="img/destaque-home.png" alt="Promoção: Big City Night">
        <a href="#" class="pause"></a>
        

    </div>

    <div class="container paineis">
        <section class="painel novidades">
            <h2>Novidades</h2>
            <ol>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura2.png">
                            <figcaption>Blusa Azul por R$ 49,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura3.png">
                            <figcaption>Blusa verde por R$ 54,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura4.png">
                            <figcaption>Casaco Bordo por R$ 149,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura5.png">
                            <figcaption>Blusa Fitnes por R$ 24,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura6.png">
                            <figcaption>Vestido por R$ 489,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>

        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura7.png">
                            <figcaption>Blusa Verde por R$ 29,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura7.png">
                            <figcaption>Blusa Verde por R$ 29,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura8.png">
                            <figcaption>Blusa Verde por R$ 29,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura9.png">
                            <figcaption>Blusa Quadriculada por R$ 69,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura10.png">
                            <figcaption>Blusa Rosa por R$ 29,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura11.png">
                            <figcaption>Bermuda Verde por R$ 29,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>
    </div>

    <?php include("rodape.php"); ?>
</body>

</html>

<script>
    var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
    var bannerAtual = 0;

    function trocaBanner() {
        bannerAtual = (bannerAtual + 1) % 2;
        document.querySelector('.destaque img').src = banners[bannerAtual];
    }

    var timer = setInterval(trocaBanner, 4000);

    var controle = document.querySelector('.pause');
    controle.onclick = function () {
        if (controle.className == 'pause')
        {
            clearInterval(timer);
            controle.className = 'play';
        } else {
            timer = setInterval(trocaBanner, 4000);
            controle.className = 'pause';
        }
        return false;
    };
</script>