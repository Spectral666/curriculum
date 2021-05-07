<?php
    $destino= "100007133.joan23@fje.edu";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html")

?>