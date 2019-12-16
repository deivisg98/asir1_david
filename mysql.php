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

if(0){ 	// provincias de Galicia
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}


if(0){ // provincias que empiezan por A
	foreach($provincias as $p){
		if($p['provincia'][0]=='A'){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // provincias con nombre compuesto
	foreach($provincias as $p){
		if(strstr($p['provincia'], ' ', true)){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // provincias que estan en autonomias con nombre compuesto
	foreach($provincias as $p){
		if(strstr($p['autonomia'], ' ', true)){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // provincias tienen nombre simple
	foreach($provincias as $p){
		if(!strstr($p['provincia'], ' ')){
			echo $p['provincia'].'<br>';
		}
	}
}


if(0){ // provincias de galicia por poblacion (grande, mediana, pequeña)
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


if(0) { // provincias que tienen el diptongo ue
	foreach($provincias as $p){
				if(strstr($p['provincia'], 'ue', true)){
			echo $p['provincia'].'<br>';
				}
		}
}

if(0) { // autonomias que acaban en ana
		foreach($provincias as $p){
				foreach($end as $e) {
					if(substr($p['autonomia'], -strlen($e)) === $e) {
				echo $p['autonomia'].'<br>';
					}
				}
			}
		}

if(0) { // nombre y caracteres de cada autonomia (por orden descendente)
	foreach($provincias as $p){
				if(!strstr($p['autonomia'], '0', true)){
			echo $p['autonomia'].' tiene '.strlen($p['autonomia']).' letras'.'<br>';
				}
		}
	}
	
if(0) { // autonomias que empiezan por can
		foreach($provincias as $p){
					if(strstr($p['autonomia'], 'Can')) {
				echo $p['autonomia'].'<br>';
				}
			}
		}

if(1){ // autonomias con provincias de mas de un millon de habitantes
	foreach($provincias as $p){
		if($p['poblacion']>1e6){
		echo $p['autonomia'].'<br>';}
		}
	}

?>