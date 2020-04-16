<?php

$resultado = 10 + 3 / 2; //Normal
$resultado2 = (10 + 3) / 2; // Forçado
$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3; //comparativo com condicionante das duas validações devem ser verdadeiras
$resultado4 = (10 + 3) / 2 > 5 || 10 + 5 < 3; //comparativo com condicionante uma das validações devem ser verdadeiras

echo $resultado;
echo "<br>";
echo $resultado2;
echo "<br>";
var_dump ($resultado3);
echo "<br>";
var_dump ($resultado4);
?>