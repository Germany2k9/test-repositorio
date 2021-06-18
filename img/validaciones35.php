<?php 

$cadenaRecibida = $_GET['nombre'];
echo " <p> se ha recibido el valor  $cadenaRecibida </p>";

$cadenaSinEpsacios = trim($cadenaRecibida);
echo "<p>Sin Espacios $cadenaSinEpsacios </p>";

$cadenaSinEscapes = stripcslashes($cadenaSinEpsacios);
echo "<p>Sin Espacios $cadenaSinEscapes </p>";

$cadenaSinEscapes = htmlspecialchars($cadenaSinEpsacios);
echo "<p>Sin Espacios $cadenaSinEscapes </p>";


?>