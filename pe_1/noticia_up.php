<!DOCTYPE html>
<html>
<head>
<title>redirect</title>
</head>
<body>

<?php

require 'noticia_bd.php';

	echo "{$_POST['til']}";
	echo "{$_POST['cue']}";
	$up=new Acess_bd;
	
	$up->insertar($_POST['til'],$_POST['cue']);
	header("location:index.php");

?>

</body>
</html>