<!DOCTYPE html>
<html>
<head>
<title>todo noticia</title>
</head>
<body>


<?php
 
  require 'noticia_bd.php';
  
  echo "Base de datos"; 
  echo "<br/>";
  
  
  echo "<hr /><br /> Resultados <br />";
  
                      
  echo "Generar"." tabla de resultados";
  echo "<table border='2'>
	<tr>
	<th>Id</th>
	<th>Titulo</th>
	<th>Cuerpo</th>
    </tr>";
  
  $resultado=new Acess_bd;
  $tabla_x=$resultado->listar();
  

  foreach ($tabla_x as $row){
  
  echo "<tr>";
	  echo "<td>".$row->getId()."</td>";
	  echo "<td>".$row->getTitulo()."</td>";
	  echo "<td>".$row->getCuerpo()."</td>";
  echo "</tr>";
  
  }
  echo "</table>"
  
  ?>

<br />
<a href="index.php">Volver</a>  
</body>
</html>