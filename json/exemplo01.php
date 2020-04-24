<?php 
/** 
 
*/
 
 $pessoas = array();

array_push($pessoas, array(
    'nome'=>'Thiago',
    'idade'=>20
));
array_push($pessoas, array(
    'nome'=>'Giovana',
    'idade'=>3
));


echo json_encode($pessoas);
 
?>