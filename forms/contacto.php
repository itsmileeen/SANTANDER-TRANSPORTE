<?php

    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];

    $info = "De: $nombre \n";

    $info .= "Correo: $correo \n";

    $info .= "Asunto: $asunto \n";

    $info .= "Mensaje: $mensaje \n";

   
    $cuerpo = $info;

    mail('informes@santanderlg.pe', $asunto, $cuerpo);

    header('Location:index.html');

?>