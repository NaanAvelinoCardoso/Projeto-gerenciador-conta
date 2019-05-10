<?php
class Usuario {
  private $id;
  private $nome;
  private $email;
  private $senha;

  private $pdo;

  /*
  * Gerenciador de Contas
  *
  *Descrição:
  *Com esse sistema você poderá cadastrar novos usuarios, editar, deletar 99% funcional
  *
  * @author Naã Avelino <naanavelino2018@gmail.com>
  */

  public function __construct() {
    try {
      $this->pdo = new PDO("mysql:dbname=treinar;host=localhost", "root", "");
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAll() {
    $sql = "SELECT * FROM usuarios";
    $sql = $this->pdo->query($sql);

    $array = array();
    if ($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }

  public function getNome($id = '') {
    $sql = $this->pdo->prepare("SELECT (nome) FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    $array = array();
    if ($sql->rowCount() > 0) {
      $array = $sql->fetch();
    }

    return $array;


  }

  public function getEmail($id) {
    $sql = $this->pdo->prepare("SELECT (email) FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    $array = array();
    if ($sql->rowCount() > 0) {
      $array = $sql->fetch();
    }

    return $array;
  }


  public function addUsuario($nome, $email, $senha) {
    $sql = $this->pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();
  }

  public function editar($nome, $email, $id) {
    $sql = $this->pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
    $sql->execute(array($nome, $email, $id));
  }

  public function deletar($id) {
    $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $sql->execute(array($id));
  }
}
?>
