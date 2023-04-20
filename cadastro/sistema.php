<?php
session_start();

include_once('conexao.php');

if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];

$sql = "SELECT * FROM cadastro ORDER BY id";

$result = $db_conect->query($sql);

print_r($result);
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
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(95, 0, 120), rgb(50, 0, 100));
        }

        h1 {
            color: antiquewhite;
            text-align: center;
        }

        .table-bg {
            background: rgba(0,0,0, 0.4);
            border-radius: 15px 15px 0 0;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar" style="background-color: rgba(0,0,0, 0.5);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:antiquewhite">Sistema do cadastro</a>
            <form class="d-flex" role="search">
                <a href="sair.php" class="btn btn-outline-danger">Sair</a>
            </form>
        </div>
    </nav>

    <br><br>

    <?php echo "<h1>Bem vindo <u>$logado</u>!</h1>" ?>

    <br><br>

    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">UF</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['senha'] . "</td>";
                    echo "<td>" . $user_data['telefone'] . "</td>";
                    echo "<td>" . $user_data['sexo'] . "</td>";
                    echo "<td>" . $user_data['nascimento'] . "</td>";
                    echo "<td>" . $user_data['cidade'] . "</td>";
                    echo "<td>" . $user_data['estado'] . "</td>";
                    echo "<td>" . $user_data['endereco'] . "</td>";
                    echo "<td>...</td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>