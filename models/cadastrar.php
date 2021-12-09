<?php
// incluindo conexão com banco
include_once '../config/conexao.php';

// filtrando dados vindo de inputs
$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');


// criando query com comando insert mas ainda sem os valores ,pra isso e necessario usar a $conect->prepare. ($conect é a variavel vinda do arquivo de conexão)
$comand = $conect->prepare("INSERT INTO usuarios (nome, sobrenome, email, senha) 
VALUES (:nome, :sobrenome, :email, :senha)");

// adicionando os valores que serão enviados no comando
$comand->bindValue(':nome', $nome);
$comand->bindValue(':sobrenome', $sobrenome);
$comand->bindValue(':email', $email);
$comand->bindValue(':senha', $senha);

// bindValue = Aceita qualquer valor
// bindparam = Aceita apenas valores de variaveis

// executando comando de cadastro no banco
$comand->execute();

// ------------ OUTRA FORMA DE FAZER O MESMO QUE O CODIGO ACIMA --------------------
//$conect->query("INSERT INTO usuarios (nome, sobrenome, email, senha) 
//VALUES ('".$nome."', '".$sobrenome."', '".$email."', '".$senha."') ");

// retornando ao index
header('Location: ../index.php')

?>