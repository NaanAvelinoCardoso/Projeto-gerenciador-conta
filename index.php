<?php
session_start();
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

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>
    <br>
    <h1 class="text-center">Gerenciador de Contas</h1><br>
    <div class="table-responsive">
    <div class="container">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
        <tr>
        <th>ID:</th>
        <th>Nome:</th>
        <th>E-mail:</th>
        <th>Senha:</th>
        <th>Ações:</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($usuario->getAll() as $item) {
        $id = $_SESSION['id'] = $item['id'];
        $nome = $_SESSION['nome'] = $item['nome'];
        $email = $_SESSION['email'] = $item['email'];
        ?>
        <tr>
          <td><?php echo $item['id']; ?></td>
          <td><?php echo $item['nome']; ?></td>
          <td><?php echo $item['email']; ?></td>
          <td><?php echo $item['senha']; ?></td>
          <td><?php echo "<a class='btn btn-primary text-white' href='editar.php?id=".$id."'>Editar <i class='fas fa-pencil-alt'></i></i></a>"." - "."<a class='btn btn-danger text-white' href='deletar.php?id=".$_SESSION['id']."'>Deletar <i class='fas fa-trash-alt'></i></a>"; ?></td>
        </tr>
        <?php
        }
        ?>
       </tbody>
    </table>
    <a class="btn btn-success" href="adicionar.php">Adicionar</a>
  </div>


    </div>
















  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
