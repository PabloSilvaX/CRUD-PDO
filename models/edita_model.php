<?php

include_once '../config/conexao.php';

$id = isset($_GET['id'])?$_GET['id']:null;

// filtrando dados vindo de inputs
$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');


// criando query com comando insert mas ainda sem os valores ,pra isso e necessario usar a $conect->prepare. ($conect é a variavel vinda do arquivo de conexão)
$comand = $conect->prepare("UPDATE usuarios SET nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha 
WHERE id=:id");

// adicionando os valores que serão enviados no comando
$comand->bindValue(':id', $id);
$comand->bindValue(':nome', $nome);
$comand->bindValue(':sobrenome', $sobrenome);
$comand->bindValue(':email', $email);
$comand->bindValue(':senha', $senha);

// bindValue = Aceita qualquer valor
// bindparam = Aceita apenas valores de variaveis

// executando comando de cadastro no banco
$comand->execute();

// retornando ao index
header('Location: ../listar.php')

?>