<?php
session_start();
require 'usuarios.php';
$usuario = new Usuario();
$_SESSION['id'] = $_GET['id'];

/*
* Gerenciador de Contas
*
*Descrição:
*Com esse sistema você poderá cadastrar novos usuarios, editar, deletar 99% funcional
*
* @author Naã Avelino <naanavelino2018@gmail.com>
*/

if (!empty($_SESSION['id'])) {
  $usuario->deletar($_SESSION['id']);
}

header("Location: index.php");
exit();
?>
