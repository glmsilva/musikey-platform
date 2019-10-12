<?php

//Chamando a classe Conect.php

include "conect.php";

//nome dos campos do formulário

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nome = $_POST['nome'];
    $generoBanda = $_POST['generoBanda'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $busca = $_POST['busca'];
    $contato = $_POST['contato'];

    
    // Inclusão no banco de dados, comando de mysql dentro do pqp com mysqli_query
    
    mysqli_query($link, "insert into tb_banda values(default, '$nome', '$generoBanda', '$descricao', '$local', '$busca', '$contato');");
    echo "<script>alert('Cadastro efetuado, boa sorte!');</script>";
    header('location: index.php');

}    
