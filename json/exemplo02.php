<?php 
/** 
 
*/
 
$json = '[{"nome":"Thiago","idade":20},{"nome":"Giovana","idade":3}]';

$dados = json_decode($json, true);
 
var_dump($dados)
?>