<?php
$destino="aireauton@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$asunto= $_POST["asunto"];
$mensaje= $_POST["mensaje"];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
mail($destino,"Auton - Tienes un mensaje desde tu web de Contacto", $contenido);
header("Location:exito.php");
?>