<?php 

include_once('conexao.php');

if(isset($_POST['update'])) {

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$nascimento = $_POST['ano_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$sqlUpdate = "UPDATE cadastro SET nome='$nome',email='$email',senha='$senha',telefone='$telefone',sexo='$sexo',nascimento='$nascimento',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE id='$id';";

$result = $db_conect->query($sqlUpdate);
}

header('Location: sistema.php');
exit;