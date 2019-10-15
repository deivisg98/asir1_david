
<?php
$l=[1,1,1];

$a=$l[0];
	$b=$l[1];
	$c=$l[2];
	
	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	
	$A=atan($h/($c-$x))*(360/(2*3.14));
	$B=atan($h/$x)*(360/(2*3.14));
	$C=180-($A+$B);
	
echo $x."<br>";
echo $h."<br>";
echo $A."<br>";
echo $B."<br>";
echo $C."<br>";

?>