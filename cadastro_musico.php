<?php

//Chamando a classe Conect.php

include "conect.php";

//nome dos campos do formulário

if(isset($_POST['nome'] && $_POST['sobrenome'] && $_POST['dia'] && $_POST['mes'] && $_POST['ano'] && $_POST['opcaoMusico1']  && $_POST['opcaoMusico2']  && $_POST['opcaoMusico3'] &&  && $_POST['email']  && $_POST['telefone'] ))
{
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $op1 = $_POST['opcaoMusico1'];
    $op2 = $_POST['opcaoMusico2'];
    $op3 = $_POST['opcaoMusico3'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];

}
// Inclusão no banco de dados, comando de mysql dentro do pqp com mysqli_query

if($tel->is_numeric)
{
    mysqli_query($link, "insert into tb_musico values(default, '$nome', '$sobrenome', '$ano-$mes-$dia', '$op1', '$op2', '$op3, '$email', '$tel')");
    echo "<script>alert('Cadastro efetuado, boa sorte!');</script>";
    header('location: index.php');


}
else
{
    echo "<script>alert('Telefone tem que conter apenas números');</script>";

}


