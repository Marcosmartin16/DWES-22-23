<?php
    
    /*Dados estos arrays consigue que el resultado sea rojo, verde, naranja, azul usando la funcion array_merge*/
    $a1=array("a"=>"rojo");
    $a2=array("b"=>"añil", "c"=>"violeta");
    $a3=array("d"=>"verde", "f"=>"naranja");
    $a4=array("i"=>"azul");
    $a5=array("g"=>"azul", "h"=>"blanco");
  
    $merge1 = array_merge($a1,$a3);
    $merge2 = array_merge($merge1,$a4);
    $merge3 = array_merge($merge2, $a5);
    $merge4 = array_merge($merge3, $a2);
    
    print_r($merge4);
?>