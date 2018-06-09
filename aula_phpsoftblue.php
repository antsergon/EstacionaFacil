<?php 

/*
$soma = 0;

for ($i=50; $i <= 100 ; $i+=2) {

	$soma+=$i;

}

echo "$soma";
*/

$fat = 4;

$rs = 1;

for ($i=$fat; $i>1 ; $i--) { 
	
	
	$rs *= $fat;
	$fat--;

}


echo $rs ;

?>