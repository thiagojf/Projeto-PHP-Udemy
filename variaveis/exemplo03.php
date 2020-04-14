<?php

$Nome = "Thiago";
$site = 'www.thiago.com.br';

$ano = 1987;
$salario = 5500.99;
$bloqueado = false;
//////////////////////Tipos compostos//////////////////////////
$frutas = array("Abacaxi","Laranja","Limão");
echo $frutas[2];
echo "<br />";

// Comando "new" indica orientação ao objeto
$nascimento = new DateTime();
//var_dump($nascimento);

$arquivo = fopen("exemplo03.php","r");
var_dump($arquivo);

?>