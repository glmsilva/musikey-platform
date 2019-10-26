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
            <?php include('nav.php'); ?>
        </ul>
        <form class="form-inline my-2 my-md-0 ml-5">
         <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
</div>
<!-- Header -->
  <div class="container">
  <header class="jumbotron  mr-1 ml-1">
    <?php include('header.php');?>
  </header>
  </div>

<!-- BODY -->




<!-- FOOTER -->
            <br>

    <footer class="jumbotron" style="padding-bottom:1px;padding-top:8px;color:black;">
      <?php include('footer.php'); ?>
    </footer>
          </div>  
    

    
</body>
</html>