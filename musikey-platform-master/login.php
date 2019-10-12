<?php

//Chamando a classe Conect.php

include "conect.php";

//nome dos campos do formulário

$email = $_POST['email'];
$senha = $_POST['senha'];

// Inclusão no banco de dados, comando de mysql dentro do pqp com mysqli_query

//$result = mysqli_query($link, "select * from tb_user(user_email, user_pwd) where user_email = $email and user_pwd = $senha");


if($result = mysqli_query($link, "select * from tb_user where user_email = '$email' and user_pwd = '$pwd'") )
{
    echo "alert('OK')";
    header('location: index.php');
}

// mudança de página

else{
     echo"alert('Login inválido')";
     header('location: login.html');
}

?>