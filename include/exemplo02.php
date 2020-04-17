<?php
// O include não obriga que o arquivo esteja funcionado corretamente
include "exemplo01.php";
// o require espera que o arquivo esteja 100% ok, caso contrario ele para a execusão
require "exemplo01.php"

$resultado = somar(10, 20);

echo $resultado;


?>