<?php
include_once '../config/conexao.php';

$id = isset($_GET['id'])?$_GET['id']:null;

$res = $conect->prepare("DELETE FROM usuarios WHERE id=:id");

$res->bindValue(':id', $id);

$res->execute();

header('Location: ../listar.php');

?>