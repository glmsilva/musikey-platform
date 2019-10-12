<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

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

  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand ml-auto" href="index.html">musikey</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
            
          <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav ml-auto mr-3" >
          <li class="nav-item ">
           <a class="nav-link" href="index.php">home</a>
           </li>
           <li class="nav-item ">
           <a class="nav-link" href="#">busque</a>
           </li>
           <li class="nav-item active">
             <a href="musico.php" class="nav-link">cadastre</a>
           </li>
       <li class="nav-item">
        <a class="nav-link" href="login.html">faça parte</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-md-0 ml-5">
                  <input class="form-control" type="text" placeholder="Search">
                </form>
              </div>
            </nav>
  </div>

              <main>
                <div class="jumbotron">
                  <a href="index.html"></a>
                      
                        
                        <h1 class="display-4">Cadastre-se</h1>
                          <p></p>
                      
                          
                      </div>
                      
                    
          
         <div class="login-box">
          <div class="container">
            <div class="row align-items-center">
              <div class="col">
                <div class="row">
                    <div class="col-6 col-xl-4">
                      <div class="container">
                        <br><br><br>
                          <form action="cad_musico.php" method="post">
                              <label>Nome:</label><br>
                              <input type="text" name="nome" class="form-control">
                              <label>Sobrenome:</label><br>
                              <input type="text" name="sobrenome" class="form-control">
                              <label>Data de nascimento:</label>
                              <div class="form-row">
                                  <div class="col-3">
                                    <input type="number" name="dia" class="form-control" placeholder="Dia">
                                  </div>
                                  <div class="col-5">
                                    <select name="mes" class="form-control" placeholder="Mês">
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
                                  <div class="col-4">
                                    <select name="ano" class="form-control">
                                      <?php
                                      $ano = 1950;
                                      $anoatual = 2019;
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
                              <div class="col-4">
                              <select name="opcaoMusico1" class="form-control" placeholder="Musico">
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
                                  <option value="Backvocal">Back-vocal</option>
                                  <option value="Violinista">Violinista</option>
                                </select>
          
                            </div>
                            <div class="col-4">
                                <select name="opcaoMusico2" class="form-control" placeholder="Musico">
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
                                  <option value="Backvocal">Back-vocal</option>
                                  <option value="Violinista">Violinista</option>
                                </select>
          
                            </div>
          
                            <div class="col-4">
                                <select name="opcaoMusico3" class="form-control" placeholder="Musico">
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
                                  <option value="Backvocal">Back-vocal</option>
                                  <option value="Violinista">Violinista</option>
                                </select>
          
                            </div>
                            
                            <div class="col">
                                <label>E-mail:</label>
                              <input type="email" name="email" class="form-control">
                            </div>
                            
                            <div class="col">
                                <label>Telefone:</label>
                              <input type="tel" name="telefone" class="form-control">
                            </div>
                          </div>
                          <br>
                          <input type="submit" value="cadastrar" class="form-control btn-dark">
                          <br>
                            </form>
          

                      </div>
                  
                  </div>
                
              
              <div class=" col-6 col-xl-8 align-self-end">
                <img src="image/manGuitar.png" heigth="800px" alt="">
                
              </div>
              </div>
              </div>
              </div>





            </div>



          </div>



         
 




</body>
</html>