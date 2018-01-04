<?php 
    $css_sobre = '<link rel="stylesheet" type="text/css" media="screen" href="css/sobre.css">';
    $cabecalho_title = "Sobre";
    include("cabecalho.php"); ?>
<body>
    <article class="container">
        <section>
            <p>
                A
                <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada
                há <?php print date("Y")-1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118 deles.Nosso
                centro de distribuição fica em
                <a href="https://goo.gl/maps/mNHuZK494KA2"> Jacarezinho, no Paraná.</a> De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo.
                Nosso centro de distribuição:</p>
            <figure id="centro-distribuicao">
                <img src="img/centro-distribuicao.png" alt="Centro de distribuição">
                <figcaption>Centro de distribuição da Mirror Fashion</figcaption:>
            </figure>
            <p>Compre suas roupas e acessórios na Mirror Fashion. Acesse
                <a href="index.html">nossa loja</a> ou entre em contato se tiver dúvidas. Conheça também nossa
                <a href="#historia">história</a> e nossos
                <a href="#diferenciais">diferenciais</a>
        </section>
        <section>
            </p>
            <h2 id="historia">História</h2>
            <figure id="familia-pelho">
                <img src="img/familia-pelho.jpg" alt="Família Pelho">
                <figcaption>Família Pelho</figcaption>
            </figure>
            <p>A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A
                <em>família Pelho</em>, tradicional da região, investiu todas as suas economias nessa nova iniciativa, revolucionária
                para a época. O fundador
                <em>Simões Pelho</em>, dotado de particular visão administrativa, guiou os negócios da empresa durante mais de
                50 anos, muitos deles ao lado de seu filho
                <em>S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.</p>

            <p> O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca
                de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em
                bilhões de diferentes pedidos. </p>
            <p>
                O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas
                5 anos de sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos
                890 mil brasileiros nas instalações de Jacarezinho e nos escritórios em todo país. </p>
            <p> Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, homenagens
                e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror Fashion, além de presidentes
                da União Européia, Ásia e o secretário-geral da ONU.</p>
        </section>
        <section>
            <h2 id="diferenciais">Diferenciais</h2>
            <ul>
                <li>Menor preço do varejo, garantido.</li>
                <li>Se você achar uma loja mais barata, leva o produto de graça.</li>
            </ul>
        </section>
        <section>
            <h2>Endereço</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1057.8722781523604!2d-48.67639723783671!3d-26.895749500702667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8cc592c64f92f%3A0xbc28be56f812029c!2sR.+Manoel+Zeferino+Teixeira+-+S%C3%A3o+Jo%C3%A3o%2C+Itaja%C3%AD+-+SC!5e0!3m2!1spt-BR!2sbr!4v1515031063581" width="850" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
    </article>
    <?php include("rodape.php"); ?>
</body>

</html>