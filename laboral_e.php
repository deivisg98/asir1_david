<?php

// Declare two dates 
$Date1 = '2019-10-28'; 
$Date2 = '2019-11-01';

//$Date3 = '2019-12-06';
//$Date4 = '2019-12-09';

//$Date5 = '2019-12-23';
//$Date6 = '2020-01-07';

//$Date7 = '2020-02-24';
//$Date8 = '2020-02-28';

//$Date9 = '2020-04-09';
//$Date10 = '2020-04-17';

//$Date11 = '2020-05-01';
//$Date12 = '2020-06-25';
  
// Declare an empty array 
$vacaciones = array(); 
  
// Use strtotime function 
$Variable1 = strtotime($Date1); 
$Variable2 = strtotime($Date2); 
  
// Use for loop to store dates into array 
// 86400 sec = 24 hrs = 60*60*24 = 1 day 
for ($currentDate = $Variable1; $currentDate <= $Variable2;  
                                $currentDate += (86400)) { 
                                      
$Store = date('Y-m-d', $currentDate); 
$vacaciones[] = $Store; 
} 


for($i=1;$i<290;$i++){
	$a=date('Y-m-d',($i-1)*24*60*60+strtotime('2019-09-13'));
	if(
		!in_array($a,$vacaciones)
		and

		date('D',strtotime($a))!='Sat'
		and
		date('D',strtotime($a))!='Sun'
	){
		$x[]=[
		'n'=>$i,
		's'=>round($i/7)+1,
		'fecha'=>date('Y-m-d',strtotime('2019-09-13')+($i-1)*24*60*60),
		'D'=>date('D',strtotime('2019-09-13')+($i-1)*24*60*60),
		];

	}
}

for($i=1;$i<290;$i++){
	$a=date('Y-m-d',($i-1)*24*60*60+strtotime('2019-09-13'));
	if(
		!in_array($a,$vacaciones)
		and
		date('D',strtotime($a))!='Sat'
		and
		date('D',strtotime($a))!='Sun'
	){
		$y[]=[
		'n'=>$i,
		's'=>round($i/7)+1,
		'fecha'=>date('Y-m-d',strtotime('2019-09-13')+($i-1)*24*60*60),
		'D'=>date('D',strtotime('2019-09-13')+($i-1)*24*60*60),
		];

	}
}

echo count($x).' horas tenemos de HW'."<br>";
echo (count($y)*2).' horas tenemos de LMS';

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