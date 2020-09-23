<!DOCTYPE html>
<html>
<head>
	<title>formulario apra enviar mail</title>
</head>
<body>
	<form method="POST">
		<label></label>
		<input type="text" placeholder="nombre" name="name" required=""><br>
		<input type="email" placeholder="email" name="mail"><br>
		<input type="text" placeholder="Asunto" name="asunto"><br>
		<br>

		<textarea placeholder="Mensaje" name="msg"></textarea><br>
		<input type="submit" name="enviar" value="enviar">
	</form>
<? php
	include('correo.php'); 
?>

</body>
</html>