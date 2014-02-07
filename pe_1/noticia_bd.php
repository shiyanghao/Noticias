<?php


require 'noticia_model.php';

class Acess_bd{
	
	private $direccion="localhost";
	private $user="root";
	private $pass="alu4prog"; 
    private $nom_bd="noticias";	

    private $conexion;//static

	private function instancia_bd(){
		
		$this->conexion=mysqli_connect($this->direccion, $this->user, $this->pass);

		if(!$this->conexion){
			throw new Exception("conexion fallado, chequea la direccion, usuario y password");
		}
		
		if(!mysqli_select_db($this->conexion, $this->nom_bd)){
			throw new Exception("Problema con seleccion de base de datos");
		}
		
	}
	
	public function listar(){
		
		try{
			$this->instancia_bd();
		}catch(Exception $e){
			
			echo $e;
		}
		
		$resultado=mysqli_query($this->conexion,"SELECT id, titulo, cuerpo
  						  FROM noticia") or die("mal consulta");
		
		$listado =array();
		$i=0;
		
		while($lista=(mysqli_fetch_array($resultado)))
		{
				
			$listado[$i]=new Noticia_Model;
			$listado[$i]->setId($lista['id']);
			$listado[$i]->setTitulo($lista['titulo']);
			$listado[$i]->setCuerpo($lista['cuerpo']);
			$i++;
			
  		}
	
		
		mysqli_close($this->conexion);
		
		return $listado;
	}
	
	public function insertar($til,$cue){
	
		try{
			$this->instancia_bd();
		}catch(Exception $e){
				
			echo $e;
		}
		
		mysqli_query($this->conexion,"INSERT INTO noticia (id, titulo, cuerpo)		
  						value(null,'$til','$cue' )") or die("mal consulta");
	
		mysqli_close($this->conexion);
	}
	
	public function modificar($id,$til,$cue){
	
		try{
			$this->instancia_bd();
		}catch(Exception $e){
	
			echo $e;
		}
	
		mysqli_query($this->conexion,"UPDATE noticia SET titulo='$til', cuerpo='$cue'
						WHERE id='$id'") or die("mal consulta");
	
		mysqli_close($this->conexion);
	}
	
	public function eliminar($id){
	
		try{
			$this->instancia_bd();
		}catch(Exception $e){
	
			echo $e;
		}
	
		mysqli_query($this->conexion," DELETE FROM noticia WHERE id='$id'") or die("mal consulta");
	
		mysqli_close($this->conexion);
	}
	
}


?>