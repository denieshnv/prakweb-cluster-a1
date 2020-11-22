<?php
$a=5;
function faktorial($n){
	$i = 1;
	$faktorial = 1;
	 while($i <= $n){
		 $faktorial = $faktorial * $i;
		 $i = $i + 1;
	 }
      return $faktorial;
    }
 echo "Faktorial dari " ;
 echo $a;
 echo " adalah = " ;
 echo faktorial($a); 
?>