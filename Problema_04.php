<?php 
fscanf(STDIN, "%d\n", $n);
$arr=array();
for($i=$n;$i>0;$i--){
	$arr[]=explode(' ',trim(fgets(STDIN)));                         //lo convierte en un array 
}
//$arr=array_reverse($arr);
//var_dump($arr);
foreach($arr as $stone){                                                //Recorre los arrays para sacar la cantidad de bits de diferencia 
echo  count_one((int)((int)$stone[0] ^ (int)$stone[1])),PHP_EOL;
}
function count_one($n)                                                  //Funcion para la suma de bits         
 {
 	$count=0;
	while ($n){
		$n=$n & ($n-1);
	$count++;
		
	}
	return $count;
}
?>