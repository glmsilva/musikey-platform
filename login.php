<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musikey</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }
      
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
          </style>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Arvo|Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/custom2.css">
</head>
<body>
<!-- NAVBAR -->
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
      <span class="navbar-brand">musikey</span>
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav ml-auto" >
            <?php include('nav-login.php'); ?>
        </ul>
        <form class="form-inline my-2 my-md-0 ml-5">
         <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
</div>
<!-- BODY -->
<div class="article">

<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

    <div class="row">
    <div class="col-md-6">
    <h2 class="text-center mt-5">Sou Banda</h2>
    <div class="login-box mb-5">
      <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['login-banda'])){
          require ('process-login-banda.php');
        }
      }
            
      ?>
    <form class="form-signin" name="form_login" method="POST" action="login.php">
        <div class="text-center">
        <img class="mb-4 mt-3" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal text-body">Login</h1>  
        </div>
        <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Insira seu email" 
        name="email" autofocus size="30" maxlength="50"  value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
        <label for="inputEmail">Email</label>
        </div>
        <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Insira sua senha" name="senha" size="8" maxlength="20">
        <label for="inputPassword">Senha</label>
        </div>
        <input type="submit" class="btn btn-primary form-control" value="Entrar" name="login-banda">
    </form>
    </div>
    </div>

    <div class="col-md-1"><div class="linha-vertical align-self-center"></div></div>
    
    <div class="col-md-5">
    <h2 class="text-center mt-5">Sou Músico</h2>
    <div class="login-box mb-5">
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['login-musico'])){
        require ('process-login-musico.php');
      }

    }
            
      ?>
    <form class="form-signin" name="form_login" method="POST" action="login.php">
        <div class="text-center">
        <img class="mb-4 mt-3" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal text-body">Login</h1>  
        </div>
        <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Insira seu email" 
        name="email" autofocus size="30" maxlength="50"  value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
        <label for="inputEmail">Email</label>
        </div>
        <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Insira sua senha" name="senha" size="8" maxlength="20" >
        <label for="inputPassword">Senha</label>
        </div>
        <input type="submit" class="btn btn-primary form-control" value="Entrar" name="login-musico">
    </form>
    </div>

    </div>
    

    </div>
</div>
    

  <!-- FOOTER -->
    <br><br><br>

    <footer class="jumbotron mt-5" style="padding-bottom:1px;padding-top:8px;color:black;">
      <?php include('footer.php'); ?>
    </footer>
</div>  
    

    
</body>
</html>