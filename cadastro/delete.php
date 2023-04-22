<?php

if (!empty($_GET['id'])) {

  include_once('conexao.php');

  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM cadastro WHERE id=$id";

  $result = $db_conect->query($sqlSelect);

  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {

      $sqlDelete = "DELETE FROM cadastro WHERE id='$id'";

      $result = $db_conect->query($sqlDelete);
      header('Location: sistema.php');
      exit;
    }
  } else {
    header('Location: sistema.php');
    exit;
  }
}
