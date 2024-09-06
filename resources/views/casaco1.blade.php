<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/casaco1.css">
    <title>Casaco com Estrutura e Estampa em Espiga</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/Logo.png" alt="Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisa">
        </div>
        <div class="user-options">
            <a href="perfil.blade.php"><button class="user-btn">Gabriel</button></a>
            <a href="carinho.blade.php"><button class="user-btn">Cesto (0)</button></a>
        </div>
        </div>
    </header>

    <main>
        <section class="product-info">
            <div class="composition">
                <h3>Composição, Cuidados e Origem</h3>
                <p>Trabalhamos com programas de acompanhamento para garantir o cumprimento das nossas normas sociais, ambientais e de segurança e saúde das nossas peças de roupa. Para avaliar o...</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="product-image">
                <img src="images/casaco1.jpg" alt="Casaco com Estrutura e Estampa em Espiga">
                <div class="thumbnail-gallery">
                    <img src="images/modelo1.jpg" alt="Thumbnail 2">
                    <img src="images/modelo2.jpg" alt="Thumbnail 3">
                    <img src="images/modelo3.jpg" alt="Thumbnail 4">
                    <img src="images/modelo4.jpg" alt="Thumbnail 5">
                </div>
            </div>

            <div class="product-details">
                <h4>Casaco com Estrutura e Estampa em Espiga</h4>
                <p>R$ 999.00</p>
                <p> Trench oversize de corte desestruturado é um terno denim ultralargo. Seu tecido liso de aspecto fosco não precisa de construções, pois ele foi pressionado ao longo do tempo como uma peça de roupa.</p>
                <a href="homem-casacos.blade.php">Ver mais</a>
                <div class="size-selector">
                    <p>Tamanho</p>
                    <button>M</button>
                    <button>P</button>
                    <button>G</button>
                    <button>EG</button>
                </div>
                <button class="add-to-cart">Adicionar</button>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-nav">
            <div class="column">
                <h3>Nav - Mapa do Site</h3>
                <ul>
                    <li><a href="#">A MINHA CONTA L / L</a></li>
                    <li><a href="#">ASSISTÊNCIA & TRANSPORTES</a></li>
                    <li><a href="#">OFERTAS PARA PRESENTE</a></li>
                    <li><a href="#">PAGAMENTOS & FATURAS</a></li>
                    <li><a href="#">TROCAS, DEVOLUÇÕES & REEMBOLSOS</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>SIGA-NOS</h3>
                <ul>
                    <li><a href="#">NEWSLETTER</a></li>
                    <li><a href="#">INSTAGRAM</a></li>
                    <li><a href="#">FACEBOOK</a></li>
                    <li><a href="#">PINTEREST</a></li>
                    <li><a href="#">YOUTUBE</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>EMPRESA</h3>
                <ul>
                    <li><a href="#">QUEM SOMOS</a></li>
                    <li><a href="#">JUNTE-SE</a></li>
                    <li><a href="#">ESCRITÓRIOS</a></li>
                    <li><a href="#">LOJAS</a></li>
                    <li><a href="#">TRABALHE CONOSCO</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>POLÍTICAS</h3>
                <ul>
                    <li><a href="#">POLÍTICA DE PRIVACIDADE</a></li>
                    <li><a href="#">CONDIÇÕES DE COMPRA</a></li>
                    <li><a href="#">CONDIÇÕES GERAIS PRESENTE</a></li>
                    <li><a href="#">PROGRAMA DE PONTOS</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
