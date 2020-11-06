<?php
$servidor = "localhost";
$username = "root";
$password = "";
$database = "recode";

// Criando a conexão
$conn = mysqli_connect($servidor, $username, $password, $database);

//Verificando a conexão
if (!$conn){
  die("A conexão ao BD falhou:" . mysqli_connect_error());
}


if(isset($_POST['nome']) && isset($_POST['msg'])){
$nome = $_POST['nome'];
$msg = $_POST['msg'];

$sql = "insert into comentarios(nome, msg) values ('$nome','$msg')";
$result = $conn->query($sql);

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Fale Conosco-Full Stack Eletro</title>
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
            <h1>Fale conosco</h1>
            <hr>
        </header>
        <br>
        <section class="form-row">
            <div class="container">
                <div class="comunicacao">
                    <img src="./imagens/email.jpeg" alt="Logo de email" width="50px">
                    <p>contato@fullstackeletro.com</p>
                </div>

                <div class="comunicacao">
                    <img src="./imagens/whatsapp.jpeg" alt="Logo de whatsapp" width="50px">
                    <p>(11) 99999-9999</p>
                </div>
            </div>
            <br>
            <br>
            <div class="container">
                <form method="post" action="">
                    <h3 class="text-danger"> Deixe a sua mensagem: </h3>
                    <div class="form-group-col-md-6">
                        <label>Nome:</label><br>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <br>
                    <div class="form-group-col-md-6">
                        <label>Mensagem:</label><br>
                        <textarea class="form-control" name="msg"></textarea><br>
                    </div>
                    <div>
                        <button class="btn btn-danger" type="submit" name="submit">Enviar</button>
                    </div>
            </div>
            </form>
        </section>
    </main>

    <br>
    <footer id="rodape">
        <p class="text-danger" id="formas_pagamento">Formas de pagamento</p>
        <img src="./imagens/formas-pagamento.jpeg" alt="Formas de pagamento">
        <p class="assinatura">&copy; Desenvolvedor: Daniela Capassi - Recode Pro</p>
    </footer>
</body>

</html>