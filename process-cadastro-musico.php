<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{

        require ('conect.php');
        $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
        $nome = preg_replace('/[0-9]+/', '', $nome);        
        if(empty($nome)){
            $erro[] = 'Você não digitou o nome';
        }
        $sobrenome = filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING);
        $sobrenome = preg_replace('/[0-9]+/', '', $sobrenome);
        if(empty($sobrenome)){
            $erro[] = 'Voce não digitou o sobrenome';
        }
        $dia = $_POST['dia'];
        if(empty($dia)){
            $erro[] = 'Você não digitou o dia';
        }

        $mes = $_POST['mes'];

        switch($mes){
            case "Janeiro":
            $mes = "1";
            break;
            case "Fevereiro":
            $mes = "2";
            break;
            case "Março":
            $mes = "3";
            break;
            case "Abril":
            $mes = "4";
            break;
            case "Maio":
            $mes = "5";
            break;
            case "Junho":
            $mes = "6";
            break;
            case "Julho":
            $mes = "7";
            break;
            case "Agosto":
            $mes = "8";
            break;
            case "Setembro":
            $mes = "9";
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
            default:
            $erro[] = 'Você não escolheu um mês de nascimento válido';
            break;
        }

        $ano = $_POST['ano'];
        if(empty($ano))
        {
            $erro[] = 'Você não escolheu um ano válido';
        }

        $funcao1 = $_POST['funcao1'];
        $funcao2 = $_POST['funcao2'];
        $funcao3 = $_POST['funcao3'];

        if(($funcao1 == $funcao2) || ($funcao1 == $funcao3) || ($funcao2 == $funcao3) )
        {
            $funcao2 = "Nenhum";
            $funcao3 = "Nenhum";
        }

        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if(empty($email)){
            $erro[] = 'Você não digitou um email ou não digitou um email válido';
        }

        $senha = filter_var($_POST['senha1'], FILTER_SANITIZE_STRING);
        $confirma = filter_var($_POST['senha2'], FILTER_SANITIZE_STRING);
        if(empty($senha || $confirma)){
            $erro[] = 'Digite e confirme sua senha';
        }
        if($senha != $confirma){
            $erro[] = 'Senha não confere com o que foi digitado';
        }

        $tel = $_POST['tel'];
        if(empty($tel)){
            $erro[] = 'Você não digitou um telefone ou não digitou um telefone válido';
        }

        if(empty($erro)){
            $dataNascimento = "$ano" . "-" . "$mes" . "-" . "$dia";
            $query = "INSERT INTO tb_musico values(default, '$nome', '$sobrenome', '$dataNascimento','$funcao1', '$funcao2', '$funcao3', '$email', '$tel', NOW());";
            mysqli_query($link, $query);
            header('location:thanks-musico.php');
            exit();

        }
        else{
            $errorstring = "Error! <br /> Os seguintes erros ocorreram:<br>";
		foreach ($erro as $msg) { // Printa cada erro.
			$errorstring .= " - $msg<br>\n";
		}
		$errorstring .= "Por favor tente novamente.<br>";
		echo "<p class=' text-center col-sm-8' style='color:red'>$errorstring</p>";
        }

        

    }
    catch(Exception $er){

        echo "O sistema está ocupado, tente novamente mais tarde";
    }
}


?>