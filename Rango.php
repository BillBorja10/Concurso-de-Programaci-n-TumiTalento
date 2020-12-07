<?php

class Rango {
    
    
    function construir($numeros = array()){         // Creamos un array para guardar los numeros 
        $mayor = max($numeros);                     // Sacamos el mayor numero del array
        $menor = min($numeros);                     // Sacamos el menor numero del array
        $cantidad = $mayor - $menor;                // Para determinar la cantidad de valores que va tener el array
        
            for ( $i=0; $i < $cantidad+1; $i++){    //En este array ordenamos en array de forma ascendente 
                $numeros[$i]=$menor;
                $menor++;
                echo $numeros[$i].",";
            }   
        echo "<br>";
    }
}


$class = new Rango;
$array1 = array (33,35,39);                         // Creamos un array para añadirlo a la funcion y poder hacer las pruebas 
$class -> construir($array1);                       // asi para cada prueba 

$array2 = array(2,5,9);
$class -> construir($array2);

$array3 = array(52,58,60);
$class -> construir($array3);
?>