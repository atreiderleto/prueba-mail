<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
</head>
<body>

	<form  method="POST" action="pagina2.php">
		<label for="nombre">Nombre</label>	<br>
		<input type="text" name="nombre" id="nombre"><br>
		
		<label for="asunto">Asunto</label><br>
		<input type="text" name="asunto" id="asunto"><br>		

		<label for="mensaje">Mensaje</label><br>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>

		<input type="submit" name="" value="enviar">
	</form>
</body>
</html>