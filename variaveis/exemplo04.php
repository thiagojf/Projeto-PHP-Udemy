<?php 

$V_a = (int)$_GET["a"];
$V_b = (int)$_GET["b"];

$ip = $_SERVER["REMOTE_ADDR"];
$nane = $_SERVER['SERVER_NAME'];;


echo "Variavel A: " . $V_a;
echo "<br />";
echo "Variavel B: " . $V_b;
echo "<br />";
echo $ip;
echo "<br />";
echo $nane;

?>