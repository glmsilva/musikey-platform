<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){    


    try{
        require ('conect.php');
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $errors[] = 'Você esqueceu de colocar seu email';
            $errors[] = ' ou o formato do seu email está incorreto.';
        }
        $password = filter_var( $_POST['senha'], FILTER_SANITIZE_STRING);	
        if (empty($password)) {
            $errors[] = 'You forgot to enter your password.';
        }

        if(empty($errors)){
            $query = "SELECT email, nome_banda, senha from tb_banda where email = '$email'";
            $result = mysqli_query($link, $query);
            $row = mysqli_num_rows($result);

            if($rows == 1){
                $_SESSION['email'] = $email;
                header('Location: painel.php');
                exit();
            }
            else{
                $_SESSION['nao_autenticado'] = true;
                header('Location: index.php');
                exit();
            }
        }




    }
    catch(Exception $e)
    {

    }
}

?>