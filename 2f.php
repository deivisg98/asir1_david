<?php
$a=array(
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciciembre');
	
for($i=0; $i<12; $i++)
echo $a[$i]."<br>";

foreach ($a as $value) {
    echo "$value <br>";
	};
	
function mes($n){
	$a=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciciembre'
	];
	return $a[$n-1];
}
echo mes(1)."<br>";
echo mes(8)."<br>";
?>