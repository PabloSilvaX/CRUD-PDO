<?php

include_once 'config/conexao.php';

$id = isset($_GET['id'])?$_GET['id']:null;

$res = $conect->query("SELECT * FROM usuarios WHERE id=".$id."");
$usuario = $res->fetch(PDO::FETCH_ASSOC);

?>