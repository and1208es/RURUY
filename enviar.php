<?php
    $destinatario = 'and1208es@gmail.com';
    //este es al correo que llegara el mensaje
    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina RURUY" ;
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre

    mail($destinatario, $mensajeCompleto, $header);
    echo "<script>alert('corre enviado exitosamente'</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
