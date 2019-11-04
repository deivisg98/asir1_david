<?php

for($i=1;$i<366;$i++){
	$x[]=[
	'n'=>$i,
	's'=>round($i/7)+1,
	'fecha'=>date('Y-m-d',strtotime('2019-01-01')+($i-1)*24*60*60),
	'D'=>date('D',strtotime('2019-01-01')+($i-1)*24*60*60),
	];
}
foreach($x as $z){
	echo '<tr>'."<br>";
	// día año
	echo '<td>'."<br>";
	echo $z['n'].'º dia del año'."<br>";
	echo '</td>';	
	// día semana
	echo '<td>';
	echo $z['s'].'ª semana del año'."<br>";
	echo '</td>';
	// fecha
	echo '<td>';
	echo $z['fecha']."<br>";
	echo '</td>';	
	// día de la semana
	echo '<td>';
	echo $z['D'];
	echo '</td>';	
	
	echo '</tr>';
}

?>