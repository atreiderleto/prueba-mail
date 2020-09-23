<?php

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if (mail('atreiderleto@gmail.com', $asunto, $mensaje)) {
	echo "Mail enviado";
}else{
	echo "No se envio el Mail";
}

?>