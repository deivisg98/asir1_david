<?php

function calcular($a, $b){
	$r=null;
	
	$r=$r.($a + $b). '</br>';
	$r=$r.($a - $b). '</br>';
	$r=$r.($a * $b). '</br>';
	if($b!=0) $r=$r.($a / $b). '</br>';
	return $r;
}
$a= calcular(7,0);
echo $a;
?>
