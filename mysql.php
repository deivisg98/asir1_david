<?php // Vamos a realizar las consultas del entrenador en php
$conn = new mysqli('localhost','root','','provincias');
$conn->query("SET NAMES utf8;");
$provincias=$conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);

if(0){
	echo '<pre>';
	print_r($provincias);
	echo '</pre>';
}

$end= ['ana'];

if(0){ 	// (00) provincias de Galicia
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}


if(0){ // (09) provincias que empiezan por A
	foreach($provincias as $p){
		if($p['provincia'][0]=='A'){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // (18) provincias con nombre compuesto
	foreach($provincias as $p){
		if(strstr($p['provincia'], ' ', true)){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // (17) provincias que estan en autonomias con nombre compuesto
	foreach($provincias as $p){
		if(strstr($p['autonomia'], ' ', true)){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // (19) provincias tienen nombre simple
	foreach($provincias as $p){
		if(!strstr($p['provincia'], ' ')){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // (51) provincias de galicia por poblacion (grande, mediana, pequeña)
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
		if($p['poblacion']>1e6){
		echo $p['provincia'].' es grande'.'<br>';}
		elseif($p['poblacion']>5e5){
			echo $p['provincia'].' es mediana'.'<br>';
			}
		else echo $p['provincia'].' es pequeña'.'<br>';
		}
	}
}


if(0) { // (08) provincias que tienen el diptongo ue
	foreach($provincias as $p){
				if(strstr($p['provincia'], 'ue', true)){
			echo $p['provincia'].'<br>';
				}
		}
}

if(0) { // (10) autonomias que acaban en ana
		foreach($provincias as $p){
				foreach($end as $e) {
					if(substr($p['autonomia'], -strlen($e)) === $e) {
				echo $p['autonomia'].'<br>';
					}
				}
			}
		}

if(0) { // (11) nombre y caracteres de cada autonomia (por orden descendente)
	foreach($provincias as $p){
				if(!strstr($p['autonomia'], '0', true)){
			echo $p['autonomia'].' tiene '.strlen($p['autonomia']).' letras'.'<br>';
				}
		}
	}
	
if(0) { // (15) autonomias que empiezan por can
		foreach($provincias as $p){
					if(strstr($p['autonomia'], 'Can')) {
				echo $p['autonomia'].'<br>';
				}
			}
		}

if(0){ // (16) autonomias con provincias de mas de un millon de habitantes
	foreach($provincias as $p){
		if($p['poblacion']>1e6){
		echo $p['autonomia'].'<br>';}
		}
	}

if(0){ // (21) poblacion del pais
	$pob=0;
	foreach($provincias as $p){
		$pob+=$p['poblacion'];
		echo $pob;
	}
}

if(0) { // (23) cuantas provincias hay en la tabla
		echo count($provincias);
	}

if(0) { // (01) listado de provincias
	foreach ($provincias as $p) {
		echo $p['provincia'].'<br>';
	}
}

if(0) { // (02) cuanto es 2+3
	echo 2+3;
}

if(0) { // (04) densidad de poblacion de las provincias
	foreach($provincias as $p){
		echo $p['provincia'].' '.$p['poblacion']/$p['superficie'].'<br>';
	}
}

if(0) { // (52) listado de nombre de las provincias qeu tiene cada autonomia 
	foreach($provincias as $p){
		echo $p['autonomia'].' '.$p['provincia'].'<br>';
	}
}

if(0) { // (05) caracteres de cada nombre de provincia
	foreach($provincias as $p){
		echo $p['provincia'].' '.strlen($p['provincia']).'<br>';
	}
}

if(0) { // (06) listado de autonomias
	foreach($provincias as $p){
		$autonomia[]=$p['autonomia'];
		$autonomia=array_unique($autonomia);
		foreach ($autonomia as $a){
			echo $a.'<br>';
		}
	}
}

if(0) { // (07) provincias con el mismo nombre que su comunidad autonoma
	foreach($provincias as $p){
		if ($p['provincia']==$p['autonomia']){
			echo $p['provincia'].'<br>';
		}
	}
}

if(0) { // (25) autonomias que contienen el nombre de una de sus provincias
	foreach($provincias as $p){
			if(strstr($p['autonomia'], $p['provincia'])){
				echo $p['autonomia'].'<br>';
		}
	}
}

if(0) { // (14) autonomia que tienen provincias con nombre compuesto
	foreach($provincias as $p) 
		if (strstr($p['provincia'], ' ')){
			echo $p['autonomia'].'<br>';
		}
	}

if(0) { // (22) superficie del pais
	$s=0;
	foreach ($provincias as $p){
		echo $s+=$p['superficie'];
	}
}

// despues de navidad

if(0) { // 01
	foreach ($provincias as $p){
		echo $p['provincia'].'<br>';
	}
}

if(0) { // 02
		echo 2+3;
}

if(0) { // 04
	foreach ($provincias as $p) {
		echo $p['provincia'].' '.$p['poblacion']/$p['superficie'].'<br>';
	}
}

if(0) { // 52
	foreach ($provincias as $p){
		echo $p['autonomia'].' '.$p['provincia'].'<br>';
	}
}

if(0) { // 05
	foreach($provincias as $p){
		echo $p['provincia'].' '.strlen($p['provincia']).'<br>';
	}
}

if(0){	// 06
	foreach($provincias as $p)
		$autonomias[]=$p['autonomia'];
	$autonomias=array_unique($autonomias);
	echo '<ol>';
	foreach($autonomias as $a)
		echo '<li>'.$a.'</li>';
	echo '</ol>';
}

if(0){ // 07
	foreach ($provincias as $p){
		if($p['provincia']==$p['autonomia']){
			echo $p['provincia'].'<br>';
		}
	}
}

if(0){ // 08
	foreach($provincias as $p){
		if(strstr($p['provincia'], 'ue', true)){
			echo $p['provincia'].'<br>';
		}
	}
}

if(0){ // 09
	foreach($provincias as $p){
		if($p['provincia'][0]=='A'){
			echo $p['provincia'].'<br>';
		}
	}
}

if(0){ // 18
	foreach($provincias as $p){
		if(strstr($p['provincia'],' ', true)){
			echo $p['provincia'].'<br>';
		}
	}
}

if(0){ // 17
	foreach($provincias as $p){
		if(strstr($p['autonomia'],' ', true)){
			echo $p['provincia'].'<br>';
		}
	}
}

if(0){ // 19
	foreach($provincias as $p){
		if(!strstr($p['provincia'],' ')){
			echo $p['provincia'].'<br>';
		}
	}
}

if(0){ // 51
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
		if($p['poblacion']>1e6){
		echo $p['provincia'].' es grande'.'<br>';}
			elseif($p['poblacion']>5e5){
		echo $p['provincia'].' es mediana'.'<br>';}
			else echo $p['provincia'].' es pequeña'.'<br>';
		}
	}
}

if(0){ // 10
	foreach($provincias as $p){
		foreach($end as $e){
			if(substr($p['autonomia'], -strlen($e)) === $e){
				echo $p['autonomia'].'<br>';
			}
		}
	}
}

if(0){	// 11
	foreach($provincias as $p){
		$a=$p['autonomia'];
		$as[$a]=iconv_strlen($a);
	}
	arsort($as);
	foreach($as as $autonomia=>$longitud)
		echo $autonomia.' '.$longitud.'<br/>';
}

if(0){ // 15
	foreach($provincias as $p)
		if(strstr($p['autonomia'], 'Can'))
			$aa[$p['autonomia']]=$p['autonomia'];
			
		sort($aa);
		foreach($aa as $a)
			echo $a.'<br>';
}
	
if(0){ // 16
	foreach($provincias as $p)
		if($p['poblacion']>1e6)
			$aa[$p['autonomia']]=$p['autonomia'];
		
		sort($aa);
			foreach($aa as $a)
			echo $a.'<br>';
}

if(0){ // 21
	$s=0;
	foreach($provincias as $p)
		$s+=$p['poblacion'];
		echo $s;
}

if(0){ // 23
		echo count($provincias);
}

if(0){ // 25
	foreach($provincias as $p)
		if(strstr($p['autonomia'], $p['provincia']))
			echo $p['autonomia'].'<br>';
}

if(0){ // 12
	foreach($provincias as $p)
		if(strstr($p['autonomia'],' '))
			$aa[$p['autonomia']]=$p['autonomia'];
		rsort($aa);
		foreach($aa as $a)
			echo $a.'<br>';
}

if(0){ // 13
	foreach($provincias as $p)
		if(!strstr($p['autonomia'],' '))
			$aa[$p['autonomia']]=$p['autonomia'];
		rsort($aa);
		foreach($aa as $a)
			echo $a.'<br>';
}

if(0){ // 14
	foreach($provincias as $p)
		if(strstr($p['provincia'],' '))
			$aa[$p['autonomia']]=$p['autonomia'];
		sort($aa);
		foreach($aa as $a)
			echo $a.'<br>';
}

if(0){ // 22
	$h=0;
	foreach($provincias as $p)
		$h+=$p['superficie'];
		echo $h;
}

if(0){ // 24 
	foreach($provincias as $p)
		$pr[$p['provincia']]=$p['provincia'];
	sort($pr);
	echo $pr[0].'<br>';
}
	
if(0){ // 26
	foreach($provincias as $p)
		if(strlen($p['provincia'])>strlen($p['autonomia']))
			echo $p['provincia'].'<br>';
}

if(0){ // 27
	foreach($provincias as $p)
			$pr[$p['autonomia']]=$p['autonomia'];
		sort($pr);
		echo count($pr);
}

if(0){ // 29
	foreach($provincias as $p)
		$as[]=iconv_strlen($p['autonomia']);
	echo min($as);
}

if(1){ // 30
	foreach($provincias as $p)
		$as[]=iconv_strlen($p['provincia']);
	echo max($as);
}
?>