<!DOCTYPE html>
<html>
<head>
<title>redirect</title>
</head>
<body>

<?php

require 'noticia_bd.php';

	echo "{$_POST['id']}";
	$up=new Acess_bd;
	
	$up->eliminar($_POST['id']);
	header("location:noticia_me.php");

?>

</body>
</html>