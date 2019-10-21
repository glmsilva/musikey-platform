<?php 

$host = "localhost"; //nome do site ou numero ip
$user = "root"; //nome do usuário
$pwd = ""; //senha se houver
$db = "musikey"; //nome do banco de dados
$link = mysqli_connect($host, $user, $pwd, $db); //função de conexão
mysqli_set_charset($link, 'utf8'); 


?>