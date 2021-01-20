<?php
$Destinatario = 'claveroa10@gmail.com';
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Asunto = $_POST['asunto'];
$Mensaje = $_POST['Mensaje'];



$header = "Este mensaje fue enviado por";
$mensajeCompleto = $mensaje .  "\nAtentamente: " . $Nombre


mail($Destinatario, $Asunto, $mensajeCompleto, $header);
