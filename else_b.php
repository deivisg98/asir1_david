<?php

function nota($a) {
		$r='Sobresaliente';
		if ($a<8.5) {
			$r="Notable";
		}if($a<7) {
			$r= "Aprobado";
	}if($a<5) {
			$r= "Pendiente";
	}
	return $r;
}
echo nota(1)."<br>";
echo nota(5)."<br>";
echo nota(8)."<br>";

?>