<?php

$archivo = fopen("datos.txt", "w");
$texto = "Latitud: ". $_GET["lat"] . "\nLongitud: ". $_GET["long"] . "\nIP: ". $_SERVER["REMOTE_ADDR"] . "\nNavegador: ". $_GET["uagent"] . "\n\n";
fwrite($archivo, $texto);
fclose($archivo);

?>