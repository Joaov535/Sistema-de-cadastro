<?php

if (!empty($_GET['id'])) {

  include_once('conexao.php');

  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM cadastro WHERE id=$id";

  $result = $db_conect->query($sqlSelect);

  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {

      $nome = $user_data['nome'];
      $email = $user_data['email'];
      $senha = $user_data['senha'];
      $telefone = $user_data['telefone'];
      $sexo = $user_data['sexo'];
      $nascimento = $user_data['nascimento'];
      $cidade = $user_data['cidade'];
      $estado = $user_data['estado'];
      $endereco = $user_data['endereco'];
    }
  } else {
    header('Location: sistema.php');
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <a href="sistema.php" style="text-decoration:none; color: black">Voltar</a>

  <div class="box">
    <form action="saveEdit.php" method="post">
      <fieldset>
        <legend><strong>Atualização de Cadastro</strong></legend>
        <br>

        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" require>
          <label for="nome" class="labelInput">Nome</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" require>
          <label for="email" class="labelInput">E-mail</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" require>
          <label for="nome" class="labelInput">Senha</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" require>
          <label for="telefone" class="labelInput">Telefone</label>
        </div>
        <br>

        <p>Sexo:</p>
        <input type="radio" name="genero" id="feminino" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : ''?>  require>
        <label for="feminino">Feminino</label>
        <br>

        <input type="radio" name="genero" id="masculino" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : ''?> require>
        <label for="masculino">Masculino</label>
        <br>

        <input type="radio" name="genero" id="outro" value="outro" <?php echo $sexo == 'outro' ? 'checked' : ''?> require>
        <label for="outro">Outro</label>
        <br> <br>

        <label for="nome"><strong>Data de Nascimento:</strong></label>
        <input type="date" name="ano_nascimento" id="ano_nascimento" value="<?php echo $nascimento?>" require>
        <br><br>

        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>" require>
          <label for="cidade" class="labelInput">Cidade</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado?>" maxlength="2" require>
          <label for="estado" class="labelInput">UF</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco?>" require>
          <label for="endereco" class="labelInput">Endereço</label>
        </div>

        <div class="btnSubmit">
          <input type="submit" value="Atualizar" class="submit" name="update" id="update">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
      </fieldset>
    </form>
  </div>

</body>

</html>