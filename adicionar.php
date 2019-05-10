<?php
require 'usuarios.php';
$usuario = new Usuario();

/*
* Gerenciador de Contas
*
*Descrição:
*Com esse sistema você poderá cadastrar novos usuarios, editar, deletar 99% funcional
*
* @author Naã Avelino <naanavelino2018@gmail.com>
*/

if (!empty($_POST['nome'])) {
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $senha = addslashes($_POST['senha']);

  $usuario->addUsuario($nome, $email, $senha);
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <form class="form" method="POST">
      Nome:<br>
      <input type="text" name="nome" placeholder="Digite um nome..."><br><br>

      Email:<br>
      <input type="email" name="email" placeholder="Digite um e-mail..."><br><br>

      Senha:<br>
      <input type="password" name="senha" placeholder="Digite uma senha..."><br><br>

      <input type="submit" class="btn btn-success" value="Cadastrar">
    </form>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
