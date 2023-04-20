<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cadastro</title>
    <style>
        body {
            color: antiquewhite;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(95, 0, 120),
                    rgb(50, 0, 100));
            text-align: center;
        }

        .box {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        a{
            color: antiquewhite;
            text-decoration: none;
            border: solid rgb(95, 0, 120);
            padding: 6px;
            border-radius: 10px;
        }

        a:hover {
            background-color: rgb(95, 0, 120);
        }
    </style>
</head>

<body>
    <h1>Bem Vindo!</h1>

    <div class="box">
        <a href="formulario.php">Cadastre-se</a>
        <a href="login.php">Login</a>
    </div>
</body>

</html>