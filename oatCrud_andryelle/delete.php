<?php
require 'crud/bd_conexao.php';
$id = $_GET['id'];
$sql = 'DELETE FROM formulario WHERE id=:id';
$estado = $connection->prepare($sql);
if ($estado->execute([':id' => $id])) {
  header("Location: index.html");
}