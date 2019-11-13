<?php
function tabla($a){
	$r=null;
	for($i=0; $i<=10; $i++){
		$r=$r.$i.'*'.$a.'='.($i*$a). '</br>';
	}
	return $r;
}
function sumar($a){
	$r=null;
	for($i=0; $i<=10; $i++){
		$r=$r.tabla($i);
	}
	return $r;
}
$c= sumar(1);
echo $c;
?>