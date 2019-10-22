<?php

$nome = "12lsadjashdjgulhermen29312908302983";
$nome = preg_replace('/[0-9]+/', '', $nome);
echo "$nome";
$ano = "1950";
$mes = "7";
$dia = "21";
$dataNascimento = "$ano" . "-" . "$mes" . "-" . "$dia";

echo "$dataNascimento";
$erro[] = array();

$erro[] = 'Você não digitou o nome';
$erro[] = 'Você não digitou o email';

$errorstring = "Error! <br /> Os seguintes erros ocorreram:<br>";
		foreach ($erro as $msg) { // Printa cada erro.
			$errorstring .= " - $msg<br>\n";
		}
		$errorstring .= "Por favor tente novamente.<br>";
		echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
?>