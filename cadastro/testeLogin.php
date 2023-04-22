<?php
session_start();

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit;
} else  if (isset($_POST['submit'])) {
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r("E-mail: $emailLogin <br> Senha: $senhaLogin");

    // Query a ser feita no banco de dados
    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
    // Resultado da query
    $result = $db_conect->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
        exit;
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
