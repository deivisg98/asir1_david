<a href="http://192.168.0.89/asir1_ruben/asir1.php"> Ruben </a>
</br>

david garcia </br>
<?php
$file = fopen("visitas.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip."\r\n");
fwrite($file, date ('Y-m-d H:i') . PHP_EOL);
fclose($file);
?> 
</br>
<a href="http://192.168.0.95/asir1_victorzayas/asir1.php"> Victor </a>
