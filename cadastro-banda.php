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
    <link rel="stylesheet" href="css/custom3.css">

</head>
<body class="pageBanda">
<!-- NAVBAR -->
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
      <span class="navbar-brand">musikey</span>
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav ml-auto" >
            <?php include('navbar-musico-register.php'); ?>
        </ul>
        <form class="form-inline my-2 my-md-0 ml-5">
         <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
</div>
<!-- Header -->

  <header class="jumbotron mr-1 ml-1">
    <?php include('header-musico-register.php');?>
  </header>

<!-- BODY -->
    <div class="article">
    <div class="row text-center mr-5 ml-5">
    <br>
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-3">
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
    require('process-cadastro-banda.php');
    } // End of the main Submit conditional.
    ?>
    <form action="cadastro-banda.php" class="form-group" method="POST">
    <label>Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Email para login" id="">
    <label>Senha:</label>
    <input type="password" name="senha1" minlength="8" maxlength="20"class="form-control">
    <label>Confirmação de Senha:</label>
    <input type="password" name="senha2" minlength="8" maxlength="20" class="form-control">   
    <label>Nome da Banda:</label>
    <input type="text" name="nome" id="" class="form-control" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>">
    <label>Gênero da Banda:</label>
        <select name="generoBanda" class="form-control" placeholder="Genero">
            <option value="Axe">Axé</option>
            <option value="Blues">Blues</option>
            <option value="Country">Country</option>
            <option value="Classica">Classica</option>
            <option value="Eletronica">Eletronica</option>
            <option value="Funk">Funk</option>
            <option value="Hip-hop">Hip-hop</option>
            <option value="Jazz">Jazz</option>
            <option value="MPB">MPB</option>
            <option value="Metal">Metal</option>
            <option value="Pagode">Pagode</option>
            <option value="Rock">Rock</option>
            <option value="Samba">Samba</option>
        </select>
        <label>Descrição:</label>
        <textarea name="descricao" class="form-control" placeholder="Descrição" value="<?php if(isset($_POST['descricao'])) echo $_POST['descricao']; ?>"> </textarea>
        <label>Local Ensaio:</label>
        <input type="text" name="local" class="form-control" placeholder="Local de Ensaio da Banda" value="<?php if(isset($_POST['local'])) echo $_POST['local']; ?>">
        <label>Buscamos por:</label>
        <textarea name="busca" class="form-control" placeholder="Função do integrante que falta" value="<?php if(isset($_POST['busca'])) echo $_POST['busca']; ?>"></textarea>
        <label>Contato:</label>
        <input type="text" name="contato" class="form-control" placeholder="Telefone ou Email" value="<?php if(isset($_POST['contato'])) echo $_POST['contato']; ?>"><br>
        <input type="submit" value="Cadastrar" class="btn btn-dark">
        </div>
                                      
    </form>


    </div>
    <div class="col-md-3"></div>
    

    
<!-- FOOTER -->
<br>

    <footer class="jumbotron" style="padding-bottom:1px;padding-top:8px;color:black;">
      <?php include('footer.php'); ?>
    </footer>
          </div>  
    

    
</body>
</html>