<?php

require_once('page.php');

$contactPage = new Page();

$contactPage->content = file_get_contents('html/form-contact.html');

$contactPage->Display();
   
   $para = "socialcck@outlook.com";
   $asunto = "Contact from CCK web";
   @$nombre = $_POST['nombre'];
   @$demail = $_POST['email'];
   @$mensaje = $_POST['mensaje'];
   $msj = '';
   
   if (!empty($nombre) and !empty($email) and !empty($mensaje)){
       if (mail($para, $asunto, $mensaje, "From: $demail")){
           echo 'Mensaje enviado con exito'.$nombre.'. Obtendrá repuesta a la breveda posible.';
       } else {
           echo 'Lo siento '.$nombre.', ha ocurrido un error al enviar el correo.';
       }
   }

?>