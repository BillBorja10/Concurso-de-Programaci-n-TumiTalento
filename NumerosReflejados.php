<?php


class NumerosReflejados {
    function Encontrar ($m,$n){
       $r=0;
       $numerosNormal = array();            //creamos dos arrays para guardar los numeros normales y los invertidos 
       $numerosInvert = array();
       $mCadena = array();
       $cantidad = $n - $m;
       for ( $i=0; $i < $cantidad+1; $i++){         //Este for nos sirve para llenar los arrays 
           $numerosNormal[$i]=$m;
       $mCadena = (string)$m; // MCADENA = 1 2 8 5 1    
           for($j=0;$j>= strlen($mCadena);$j++){        //Este for nos sirve para convertir los numeros normales a invertidos  
               switch ($mCadena[$j]){          
                   case '2':
                       $mCadena[$j]='5';
                       break;
                   case '3':
                       $mCadena[$j]='x';
                       break;
                   case '4':
                       $mCadena[$j]='x';
                       break;
                   case '5':
                       $mCadena[$j]='2';
                       break;
                   case '6':
                       $mCadena[$j]='x';
                       break´;
                   case '7':
                       $mCadena[$j]='x';
                       break;
                  
                   case '9':
                       $mCadena[$j]='x';
                       break;
                 
                   
               }
                
           } 
           $numerosInvert[$i]= strrev($mCadena);
           
           
           $m++;
           
           }
       for ( $i=0; $i < $cantidad+1; $i++){                     //Comparamos los arrays y si son iguales r aumenta su valor 
           if($numerosNormal[$i]==$numerosInvert[$i]){
              $r++;  
           }
           
       }  
         echo $r;  
       }
    }
       



    
    

$class = new NumerosReflejados;
$class ->Encontrar(7,14);// 12851
?>
