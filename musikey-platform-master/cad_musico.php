<?php

//Chamando a classe Conect.php

include "conect.php";

//nome dos campos do formulário

if($_SERVER['REQUEST_METHOD'] == 'POST')
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

    switch($mes)
    {
        case "Janeiro":
        $mes = "01";
        break;

        case "Fevereiro":
        $mes = "02";
        break;

        case "Março":
        $mes = "03";
        break;

        case "Abril":
        $mes = "04";
        break;

        case "Maio":
        $mes = "05";
        break;

        case "Junho":
        $mes = "06";
        break;

        case "Julho":
        $mes = "07";
        break;

        case "Agosto":
        $mes = "08";
        break;

        case "Setembro":
        $mes = "09";
        break;

        case "Outubro":
        $mes = "10";
        break;

        case "Novembro":
        $mes = "11";
        break;
        
        case "Dezembro":
        $mes = "12";
        break;
    }


    
    mysqli_query($link, "insert into tb_musico values(default, '$nome', '$sobrenome', '$ano-$mes-$dia', '$op1', '$op2', '$op3', '$email', '$tel')");
    
        echo "<script>alert('Cadastro efetuado, boa sorte!');</script>";
        #echo "$ano-$mes-$dia";
        header('location: index.php');
    
    
}
// Inclusão no banco de dados, comando de mysql dentro do pqp com mysqli_query





