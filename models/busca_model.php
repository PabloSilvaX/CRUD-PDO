<?php
include_once '../config/conexao.php';

$busca = isset($_GET['busca'])?$_GET['busca']:'';

$res = $conect->query("SELECT * FROM usuarios 
WHERE nome LIKE '%$busca%' 
ORDER BY nome ASC");

$html_busca = "";
while($linha = $res->fetch(PDO::FETCH_ASSOC)){
 $html_busca .= "
 <a href='consultar.php?id=".$linha['id']."'>
 <div class='itembusc'>
 ".$linha['nome']."
 </div></a>";
}

echo $html_busca;

?>