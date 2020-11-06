<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lojas-Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <!-- MENU -->
    <?php
        include_once('menu.html');
    ?>
    <main class="container-fluid">

        <header class="text-danger">
            <h1>Nossas lojas</h1>
            <hr>
        </header>
        <br>
        <section class="card-deck" id="unidades">

            <div class="card border-danger mb-3" style="max-width: 18rem;">
                <h3 class="card-title text-danger">Rio de Janeiro</h3>
                <p class="card-text">Avenida Presidente Vargas, 5000</p>
                <p class="card-text">10 &ordm; andar</p>
                <p class="card-text">Centro</p>
                <p class="card-text">(21) 3333-3333</p>
            </div>
            <div class="card border-danger mb-3" style="max-width: 18rem;">
                <h3 class="card-title text-danger">São Paulo</h3>
                <p class="card-text">Avenida Paulista, 985</p>
                <p class="card-text">3 &ordm; andar</p>
                <p class="card-text">Jardins</p>
                <p class="card-text">(11) 4444-4444</p>
            </div>
            <div class="card border-danger mb-3" style="max-width: 18rem;">
                <h3 class="card-title text-danger">Santa Catarina</h3>
                <p class="card-text">Rua Major &Aacute;vila, 370</p>
                <p class="card-text">Vila Mariana</p>
                <p class="card-text">(41) 5555-5555</p>
                <br>
            </div>
        </section>
    </main>
    <br><br><br>

    <footer id="rodape">
        <p class="text-danger" id="formas_pagamento">Formas de pagamento</p>
        <img src="./imagens/formas-pagamento.jpeg" alt="Formas de pagamento">
        <p class="assinatura">&copy; Desenvolvedor: Daniela Capassi - Recode Pro</p>
    </footer>
</body>

</html>