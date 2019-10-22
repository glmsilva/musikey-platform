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
<body class="pageMusico">
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

  
        <div class="col-md-8" style="margin-left: 30%;">
        <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
    require('process-cadastro-musico.php');
    } // End of the main Submit conditional.
    ?>
            <form action="cadastro-musico.php" class="form-group" style="    " method="POST">
        <div class="col-md-5"><label>Nome:</label>
        <input type="text" name="nome" id="" size="30" maxlength="40" class="form-control"></div>
        <div class="col-md-5"> <label>Sobrenome:</label>
        <input type="text" name="sobrenome" id="" size="40" maxlength="50" class="form-control"></div>      
        <label>Data de nascimento:</label>
        <div class="form-row">
        <div class="col-md-2">
        <input type="number" class="form-control" placeholder="dia" min="1" max="31" name="dia">
        </div>
        <div class="col-md-2">
          <select name="mes" class="form-control" placeholder="mês">
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Março">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select>
      </div>
       <div class="col-md-2">
        <select name="ano" class="form-control">
        <?php
            $ano = 1950;
            $anoatual = 2005;
            while($ano <= $anoatual)
            {
                echo"<option value='$ano'>$ano</option>";
                $ano++;
            }           
        ?>
                          
        </select>
        </div>
        </div>
        <label>Sou:</label>
            <div class="form-row">
            <div class="col-md-2">
               <select name="funcao1" class="form-control" placeholder="Escolha">
                    <option value="Nenhum">Nenhum</option>
                    <option value="Guitarrista">Guitarrista</option>
                    <option value="Baixista">Baixista</option>
                    <option value="Baterista">Baterista</option>
                    <option value="Vocalista">Vocalista</option>
                    <option value="Violinista">Violonista</option>
                    <option value="Percussionista">Percussionista</option>
                    <option value="Pianista">Pianista</option>
                    <option value="Tecladista">Tecladista</option>
                    <option value="Saxofonista">Saxofonista</option>
                    <option value="DJ">DJ</option>
                    <option value="Back-vocal">Back-vocal</option>
                    <option value="Violinista">Violinista</option>
                </select>
            </div>
            <div class="col-md-2">
            <select name="funcao2" class="form-control" placeholder="Escolha">
                    <option value="Nenhum">Nenhum</option>
                    <option value="Guitarrista">Guitarrista</option>
                    <option value="Baixista">Baixista</option>
                    <option value="Baterista">Baterista</option>
                    <option value="Vocalista">Vocalista</option>
                    <option value="Violinista">Violonista</option>
                    <option value="Percussionista">Percussionista</option>
                    <option value="Pianista">Pianista</option>
                    <option value="Tecladista">Tecladista</option>
                    <option value="Saxofonista">Saxofonista</option>
                    <option value="DJ">DJ</option>
                    <option value="Back-vocal">Back-vocal</option>
                    <option value="Violinista">Violinista</option>
                </select>
            </div>
            <div class="col-md-2">
            <select name="funcao3" class="form-control" placeholder="Escolha">
                    <option value="Nenhum">Nenhum</option>
                    <option value="Guitarrista">Guitarrista</option>
                    <option value="Baixista">Baixista</option>
                    <option value="Baterista">Baterista</option>
                    <option value="Vocalista">Vocalista</option>
                    <option value="Violinista">Violonista</option>
                    <option value="Percussionista">Percussionista</option>
                    <option value="Pianista">Pianista</option>
                    <option value="Tecladista">Tecladista</option>
                    <option value="Saxofonista">Saxofonista</option>
                    <option value="DJ">DJ</option>
                    <option value="Back-vocal">Back-vocal</option>
                    <option value="Violinista">Violinista</option>
                </select>
            </div>
            </div>
            <div class="col-md-4">
            <label>E-mail</label>
            <input type="email" name="email" placeholder="Email para o Login" class="form-control" size="40" maxlength="50" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
            </div>
            <div class="col-md-4">
            <label>Senha</label>
            <input type="password" name="senha1" placeholder="Senha para o Login" class="form-control" minlength="8" maxlength="20" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
            </div>
            <div class="col-md-4">
            <label>Confirmação de Senha</label>
            <input type="password" name="senha2" placeholder="Senha para o Login" class="form-control" minlength="8" maxlength="20" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
            
            </div>
            <div class="col-md-4">
            <label>Telefone para Contato:</label>
            <input type="tel" name="tel" class="form-control" size="11" maxlength="11" value="<?php if(isset($_POST['tel'])) echo $_POST['tel']; ?>">
            </div>
            <br>
            <input type="submit" value="Cadastrar" class="btn">


                    </div>
                    
                </form>
<!-- FOOTER -->
<br>

    <footer class="jumbotron" style="padding-bottom:1px;padding-top:8px;color:black;">
      <?php include('footer.php'); ?>
    </footer>
          </div>  
    

    
</body>
</html>