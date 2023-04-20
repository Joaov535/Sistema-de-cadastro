<?php
session_start();
if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <style>
        body {
            color: antiquewhite;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(95, 0, 120),
                    rgb(50, 0, 100));
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- <h1>Acessou o sistema</h1> -->
    <nav class="navbar" style="background-color: rgba(0,0,0, 0.5);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:antiquewhite">Sistema do cadastro</a>
            <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>