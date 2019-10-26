<?php

//Chamando a classe Conect.php

require ('conect.php');

//nome dos campos do formulário


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if(empty($email)){
        $erro[] = 'Você não digitou um email válido';
    }

    $senha = filter_var($_POST['senha1'], FILTER_SANITIZE_STRING);
    $confirma = filter_var($_POST['senha2'], FILTER_SANITIZE_STRING);
    if(empty($senha || $confirma)){
        $erro[] = 'Digite e confirme sua senha';
    }
    if($senha != $confirma){
        $erro[] = 'Senha não confere com o que foi digitado';
    }
    else{
        $senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    if(empty($nome)){
        $erro[] = 'Você não digitou um nome';
    }

    $generoBanda = filter_var($_POST['generoBanda'], FILTER_SANITIZE_STRING);
    if(empty($generoBanda)){
        $erro[] = 'Você não preencheu um genero de banda válido';
    }

    $descricao = filter_var($_POST['descricao'], FILTER_SANITIZE_STRING);
    if(empty($descricao)){
        $erro[] = 'Você não preencheu a descrição da sua banda :D';
    }
    $local = filter_var($_POST['local']);
    if(empty($local)){
        $erro[] = 'Você não preenceu um local';
    }
    $busca = filter_var($_POST['busca'], FILTER_SANITIZE_STRING);
    if(empty($busca)){
        $erro[] = 'Você não preencheu o que busca';
    }

    $contato = $_POST['contato'];
    if(empty($contato)){
        $erro[] = 'Você não preencheu um contato'; 
    }

    if(empty($erro)){ //se não tiver erros fazer a inserção no banco
        //$query = "INSERT INTO tb_banda values(default, '$email', '$nome', '$generoBanda', '$descricao', '$local', '$busca', '$contato', NOW()";
        $query = "call cadastra_banda('$nome', '$generoBanda', '$descricao', '$local', '$busca', '$contato', '$email', '$senha');";
        mysqli_query($link, $query);
        header('location: thanks-banda.php');
    }
    else{ //Se estiver erros mostrar na tela
        $errorstring = "Error! <br /> Os seguintes erros ocorreram:<br>";
		foreach ($erro as $msg) { // Printa cada erro.
			$errorstring .= " - $msg<br>\n";
		}
		$errorstring .= "Por favor tente novamente.<br>";
		echo "<p class=' text-center col-sm-12 lead' style='color:red'>$errorstring</p>";

    }


}    
