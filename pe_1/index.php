<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>pes</title>
</head>
<body>

	<br /><br /><br />
	
	<b>Mostrar todas las noticias</b>
	<form action="noticia.php">
	<input type="submit" value="Mostrar todos"/>
	</form>

	<br /><hr /><br />
	
	<b>Insertar nueva noticia </b>
	<form action="noticia_up.php" method="post">
	Titulo :<input type="text" size="20" name="til"/><br/>
	Cuerpo :<br/><textarea cols="50" rows="20" maxlength="60000" name="cue" > </textarea><br/>
	<input type="submit" value="Confirmar"/>
	</form>
	
	<br /><hr /><br />
	
	<b>Gestionar (modificar o eliminar) </b>
	<form action='noticia_me.php' method="post">
	<input type="submit" value="Ir"/>
	</form>
	
</body>
</html>
