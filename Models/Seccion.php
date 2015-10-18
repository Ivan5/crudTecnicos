<?php namespace Models;

class Seccion{
	private $id;
	private $nombre;
	
	public function __construct(){
		$this->con = new Conexion();
	}
	
			
		public function set($atributo,$contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}
	public function add(){
		$sql ="INSER INTO secciones (id,nombre,edad) VALUES ('','{$this->nombre}')";
			$this->con->consultaSimple($sql);
	}
	public function listar(){
			$sql = "SELECT * FROM secciones";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
	public function delete(){
			$sql = "DELETE FROM seccioones WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}
		
		public function edit(){
			$sql = "UPDATE FROM secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}
		
		public function view(){
			$sql = "SELECT * FROM secciones s WHERE t1.id= '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fecth_assoc($datos);
			return $row;
		}
	
}

?>