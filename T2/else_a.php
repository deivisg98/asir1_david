<?php

function nota($a) {
		$r=null;
		if ($a>=5) {
			$r="Apto";
		}else {
			$r= "No Apto";
	}
	return $r;
}
echo nota(1)."<br>";
echo nota(5)."<br>";
echo nota(8)."<br>";

?>