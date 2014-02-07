<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>


<?php
 
  require 'noticia_bd.php';
  
  echo "Base de datos"; 
  
  echo "<hr /><br /> Editar y eliminar <br />";
  
  echo "<table border='2'>
	<tr>
	<th>Titulo</th>
	<th>Cuerpo</th>
    </tr>";
  
  $resultado=new Acess_bd;
  $tabla_x=$resultado->listar();
  

  foreach ($tabla_x as $row){
  
  echo "<tr>";
	  echo "<form action='noticia_mod.php' method='post'>";

	  echo "<td><input name='til' type='text' value='".$row->getTitulo()."' /></td>";
	  echo "<td><input name='cue' type='text' value='".$row->getCuerpo()."' /></td>";
	  echo "<input name='id' style='visibility:hidden' readonly='readonly' size='1' type='text' value='".$row->getId()."' />";
	  echo "<td><input type='submit' value='Modificar'/></td>";

	  echo "</form>";
	  echo "<form action='noticia_del.php' method='post'>";

	  echo "<input name='id' style='visibility:hidden' readonly='readonly' size='1' type='text' value='".$row->getId()."' />";
	  echo "<td><input type='submit' value='Eliminar'/></td>";

	  echo "</form>";
	  
  echo "</tr>";
  
  }
  echo "</table>"
  
  ?>

<br />
<a href="index.php">Volver</a>  
</body>
</html>