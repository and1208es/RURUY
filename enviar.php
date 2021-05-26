<?php
    $destinatario = "and1208es@gmail.com";
    //este es al correo que llegara el mensaje
    $nombre = $_POST["nombre"];
    $mail = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre ."\nEmail: " . $email ."\nMensaje: " . $mensaje;
    mail($destinatario,"Contacto", $contenido);
    header("location:index.html");
?>
