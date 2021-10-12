<?php
$name=$_POST['name']
$email=$_POST['email']
$asunto=$_POST['asunto']
$mensaje=$_POST['mensaje'];

$header='From'. $email. "\r\n";
$header='X-Mailer: PHP/'. phpversion(). "\r\n";
$header=" Mine-Version: 1.0   \r\n";
$header="Content-Type:text/plain";


$mensaje="Este mensaje fue enviado por: ".$name."\r\n";
$mensaje="Su apellido es: ".$ape."\r\n";
$mensaje="Su E-mail es: ".$email."\r\n";
$mensaje="Mensaje: : ".$_POST['mensaje'];
$mensaje="Enviado el: "date('d/m/Y', time());

$para='sahumada256@gmail.com'
$asunto='Contacto'

mail($para,$asunto,$ape, utf8_decode("mensaje"),$header);
header("Location:index.html")
echo "<script>alert("enviado")</script>";
