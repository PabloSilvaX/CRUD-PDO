<?php
// try = faça
try{
// definindo constantes que serão usadas na conexão
define('HOST', 'localhost');
define('DB', 'crudPDO');
define('USER', 'root');
define('PASS', '');

// criando conexão com mysql (aceita outros bancos tambem) | O ultimo parametro que é um array é importate para definir a codificação de caracteres para evitar erros de acentuação.
$conect = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
$conect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo 'Conexão bem Sucedida !';

// catch = caso tenha algum erro em fazer o try acima
}catch(PDOException $e){
    echo "<strong>ERRO DE PDO = </strong>".$e->getMessage();
}


?>