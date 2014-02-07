<!DOCTYPE html>
<html>
<head>
<title>redirect</title>
</head>
<body>

<?php

require 'noticia_bd.php';

	echo "{$_POST['id']}";
	echo "{$_POST['til']}";
	echo "{$_POST['cue']}";
	$up=new Acess_bd;
	
	$up->modificar($_POST['id'],$_POST['til'],$_POST['cue']);
	header("location:noticia_me.php");

?>

</body>
</html>