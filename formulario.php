<?php

  if( isset($_POST['enviar']) ){
    if (!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) && !empty($_POST['telefono'])){
      $nombre = $_POST['nombre'];
      $apellido1 = $_POST['apellido1'];
      $apellido2 = $_POST['apellido2'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $actividad = $_POST['actividad'];
      $texto = $_POST['texto'];

      $mailTo = "arquitectura@hatra.es";
      $asunto = "[NUEVO CLIENTE] ".$nombre." ".$apellido1." ".$apellido2;
      $headers = "From: ".$email;
      $txt = "".$nombre." acaba de rellenar el formulario de contacto de www.hatra.es\n\nNombre: ".$nombre."\nPrimer apellido: ".$apellido1."\nSegundo Apellido: ".$apellido2."\n\nTelefono: ".$telefono."\n\nEmail: ".$email."\n\nActividad: ".$actividad."\n\nMensaje: ".$texto."\n\n";

      mail($mailTo, $asunto, $txt, $headers);
      header("Location: index.html?mailsent");
    }
  }
