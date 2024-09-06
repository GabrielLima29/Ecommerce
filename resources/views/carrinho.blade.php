<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="public/carrinho.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/Logo.png" alt="Logo">
        </div>
        <div class="user-options">
            <a href="perfil.blade.php"><button class="user-btn">Gabriel</button></a>
            <a href="carinho.blade.php"><button class="user-btn">Cesto (0)</button></a>
        </div>
        <div class="user-info">
            <span>Gabriel</span>
            <span>Cesto (1)</span>
        </div>
    </header>

    <main>
        <section class="cart">
            <div class="product-info">
                <div class="product-images">
                    <img src="product-main.png" alt="Produto Principal">
                    <div class="thumbnail-images">
                    <img src="images/modelo1.jpg" alt="Thumbnail 2">
                    <img src="images/modelo2.jpg" alt="Thumbnail 3">
                    <img src="images/modelo3.jpg" alt="Thumbnail 4">
                    <img src="images/modelo4.jpg" alt="Thumbnail 5">
                    </div>
                </div>
                <div class="product-details">
                    <h2>Casaco com Estrutura e Estampa em Espiga</h2>
                    <p>R$ 999.00</p>
                    <p>QUER EMBALAR PARA PRESENTE? <a href="#">SIM</a></p>
                </div>
            </div>
            <div class="checkout-info">
                <p>AO CONTINUAR, DECLARO QUE LI E ACEITO AS <a href="#">CONDIÇÕES DE COMPRA</a> E ENTENDO A <a href="#">POLÍTICA DE PRIVACIDADE E DE COOKIES</a> DA L / L.</p>
                <div class="total">
                    <span>TOTAL: R$ 999.00</span>
                </div>
                <button class="continue">CONTINUAR</button>
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
