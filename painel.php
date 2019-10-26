
<?php
session_start();
include('verifica-login.php');
?>
 
<h2>Olá, <?php echo $_SESSION['email']; echo "<script>alert('Login efetuado')</script>";?></h2>
<h2>Aqui vai a outra página</h2>
<h2><a href="logout.php">Sair</a></h2>