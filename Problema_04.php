<?php

function binario($dividendo)
{
    $resultadoRestos=array(); 
    while ($dividendo > 0)
    {
        $resultado=$dividendo/2; 
        $resto=$dividendo%2; 
        $resultadoRestos[]=$resto; 
        $dividendo=intval($resultado); 
    }
    return($resultadoRestos);
} 
function Comparar($M,$P){
    $arrayM= binario($M);
    $arrayP= binario($P);
    $contador=0;
   foreach($arrayM as $ar1){
     foreach($arrayP as $ar2){
          if($ar1!=$ar2){
          $contador++;
          }
        }
}
echo $contador; 
}

?>
