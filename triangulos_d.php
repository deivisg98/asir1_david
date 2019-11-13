<?php

function lados($a, $b, $c) {
	$r='triangulo escaleno';
		if ($a==$b || $a==$c) {
		$r='triangulo isosceles';
		}
		if($b==$c and $a==$c){
			$r='triangulo equilatero';
	}
	return $r;
}

function angulo($a, $b, $c) {
	$s=' y rectangulo';
		if ($a>90 || $b>90 || $c>90) {
			$s=' y obtusangulo';
			}
		
		if($a<90 and $b<90 and $c<90){
			$s=' y acutangulo';
	}
	return $s;
}
$a=[
	'lados' => [5,5,6],
	'angulo' => [90,40,50],
	];
	
function tipo($a) {
	return lados(
		$a['lados'][0],
		$a['lados'][1],
		$a['lados'][2]
		).
	 angulo(
		$a['angulo'][0],
		$a['angulo'][1],
		$a['angulo'][2]
		);
}
echo tipo($a)."<br>";

?>