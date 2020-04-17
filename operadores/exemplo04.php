<?php

$a = 30;
$b = 55;
$c = 55.0;

var_dump ($a > $b);
echo "<br>";

var_dump ($a < $b);
echo "<br>";

/**Não compara e sim atribui */
var_dump ($a = $b);
echo "<br>";

/** dois == referese a comparação de valor */
var_dump ($a == $c);
echo "<br>";

/** três === referese a comparação de valor e de identidade */
var_dump ($a === $c);
echo "<br>";

/** Diferença de valor */
var_dump ($a !== $b);
echo "<br>";

?>