<?php

class Noticia_Model{
	
	private $id;
	private $titulo;
	private $cuerpo;
	

	public function crear($id,$titulo,$cuerpo){
	
		$this->id=$id;
		$this->titulo=$titulo;
		$this->cuerpo=$cuerpo;
	
	}
	
	
	public function getId(){
		
		return $this->id;
		
	}
	
	public function getTitulo(){
	
		return $this->titulo;
	
	}
	
	public function getCuerpo(){
	
		return $this->cuerpo;
	
	}
	
	public function setId($x){
	
		return $this->id=$x;
	
	}
	
	public function setTitulo($x){
	
		return $this->titulo=$x;
	
	}
	
	public function setCuerpo($x){
	
		return $this->cuerpo=$x;
	
	}
	
}


?>