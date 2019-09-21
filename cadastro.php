<?php

//Chamando a classe Conect.php

include "conect.php";

//nome dos campos do formulário

$email = $_POST['email'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
// Inclusão no banco de dados, comando de mysql dentro do pqp com mysqli_query


if($senha != $senha2)
{
    echo "alert('Senha tem que ser igual');";
    
}
else{
    mysqli_query($link, "insert into tb_user values(default, '$email', '$senha')");
    header('location: index.php');
}

