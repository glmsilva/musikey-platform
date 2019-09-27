<?php

//Chamando a classe Conect.php

include "conect.php";

//nome dos campos do formulário

if(isset($_POST['nome'] && $_POST['generoBanda'] && $_POST['descricao'] && $_POST['local'] && $_POST['busca'] && $_POST['contato']))
{
    $nome = $_POST['nome'];
    $sobrenome = $_POST['generoBanda'];
    $dia = $_POST['descricao'];
    $mes = $_POST['local'];
    $ano = $_POST['busca'];
    $op1 = $_POST['contato'];

    
    // Inclusão no banco de dados, comando de mysql dentro do pqp com mysqli_query
    
    mysqli_query($link, "insert into tb_banda values(default, '$nome', '$generoBanda', '$descricao', '$local', '$busca', '$contato')");
    echo "<script>alert('Cadastro efetuado, boa sorte!');</script>";
    header('location: index.php');

}    
