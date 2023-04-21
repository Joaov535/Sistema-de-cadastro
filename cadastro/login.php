<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            color: antiquewhite;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(95, 0, 120),
                    rgb(50, 0, 100));
        }

        .tela-login {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .inputSubmit {
            font-size: large;
            width: 100%;
            height: 40px;
        }
    </style>
</head>

<body>
    <a href="index.php" style="text-decoration:none; color: black">Voltar</a>
    <form action="testeLogin.php" method="post">
        <div class="tela-login">
            <h1>Login</h1>
            <input type="text" name="email" id="email" placeholder="Nome" require>
            <br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha" require>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </div>
    </form>
</body>

</html>