<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Floating labels example · Bootstrap</title>
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
          <link href="https://fonts.googleapis.com/css?family=Pattaya|Arvo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/custom2.css">

  </head>
  <body>
      <div class="container">
          <nav class="navbar navbar-expand-md navbar-dark">
           <a class="navbar-brand ml-2" href="#">musikey</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                 
               <div class="collapse navbar-collapse" id="navbarsExample04">
               <ul class="navbar-nav ml-auto mr-2" >
               <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Cadastro</a>
                </li>
            <li class="nav-item">
             <a class="nav-link" href="login.html">Login</a>
                       </li>
                     </ul>
                     <form class="form-inline my-2 my-md-0">
                       <input class="form-control" type="text" placeholder="Search">
                     </form>
                   </div>
                  </div>
                 </nav>

    <div class="cadastro-box">
    <div class="container">
    <form class="form-signin" name="form_login" method="POST" action="cadastro.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal text-body">Cadastre-se</h1>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
    <label for="inputEmail">Email</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>
    <label for="inputPassword">Senha</label>
  </div>
  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Confirme a Senha" name="senha2" required>
    <label for="inputPassword">Confirme a senha</label>
  </div>
  <input type="submit" class="btn btn-primary btn-block bg-custom2" value="Cadastrar">
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
</form>
</div>



    </div>
    </body>
</html>