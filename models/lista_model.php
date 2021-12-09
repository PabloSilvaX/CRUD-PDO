<?php

// algumas formas de listar 

function listaUsuarios1(){
    // incluindo conexão com banco
    include_once 'config/conexao.php';
    $rs = $conect->query("SELECT * FROM usuarios");
    $lista_usuarios = '';
    while($row = $rs->fetch(PDO::FETCH_OBJ)){
    
        $lista_usuarios .= '<tr>';
        $lista_usuarios .= '<th scope="row">'.$row->id.'</th>';
        $lista_usuarios .= '<td>'.$row->nome.'</td>';
        $lista_usuarios .= '<td>'.$row->sobrenome.'</td>';
        $lista_usuarios .= '<td>'.$row->email.'</td>';
        $lista_usuarios .= '</tr>';
    }

    return $lista_usuarios;
}

function listarUsuarios2(){
    // incluindo conexão
    include_once 'config/conexao.php';

    // guardando execução de query (comando mysql) em variavel $res
    $res = $conect->prepare("SELECT * FROM usuarios ORDER BY id DESC");
    $res->execute();
    // criando variavel que guardara os resultados html
    $lista_usuarios = '';

    // laço de repetição pegando todos dados obtidos
    while($linha = $res->fetch(PDO::FETCH_ASSOC)){

        $lista_usuarios .= '<tr>';
        $lista_usuarios .= '<th scope="row">'.$linha['id'].'</th>';
        $lista_usuarios .= '<td>'.$linha['nome'].'</td>';
        $lista_usuarios .= '<td>'.$linha['sobrenome'].'</td>';
        $lista_usuarios .= '<td>'.$linha['email'].'</td>';
        
        $lista_usuarios .= '<td>
        <a href="consultar.php?id='.$linha['id'].'">
        <button class="btn btn-outline-primary mb-1">
        <i class="far fa-eye text-primary"></i>
        </button></a>
        <a href="editar.php?id='.$linha['id'].'">
        <button class="btn btn-outline-success mb-1">
        <i class="fas fa-pencil-alt text-success"></i>
        </button></a>
        <a href="models/deleta_model.php?id='.$linha['id'].'">
        <button class="btn btn-outline-danger mb-1">
        <i class="fas fa-trash text-danger"></i>
        </button></a>
        </td>';
        $lista_usuarios .= '</tr>';
    }
    return $lista_usuarios;
}

// ------------ OUTRA FORMA DE FAZER O MESMO QUE O CODIGO ACIMA --------------------
//$conect->query("INSERT INTO usuarios (nome, sobrenome, email, senha) 
//VALUES ('".$nome."', '".$sobrenome."', '".$email."', '".$senha."') ");


?>