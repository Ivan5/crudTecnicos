<?php namespace Controllers;
	
	use Models\Tecnico as Tecnico;
	use Models\Seccion as Seccion;
	
	class estudiantesController{
		private $tecnico;
		private $seccion;
		public function __construct(){
			$this->tecnico = new Tecnico();
			$this->seccion = new Seccion();
		}
		public function index(){
			$datos = $this->tecnico->listar();
			return $datos;
		}
		public function agregar(){
			if(!$_POST){
				$datos = $this->seccion->listar();
				return $datos;
			}else{
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "template". DS . "imagenes" . DS . "avatars" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->tecnico->set("nombre", $_POST['nombre']);
					$this->tecnico->set("edad", $_POST['edad']);
					$this->tecnico->set("calificacion", $_POST['calificacion']);
					$this->tecnico->set("imagen", $nombre);
					$this->tecnico->set("id_seccion", $_POST['id_seccion']);
					$this->tecnico->add();
					header("Location: " . URL . "tecnicos");
				}
			}
		}
		public function editar($id){
			if(!$_POST){
				$this->tecnico->set("id", $id);
				$datos = $this->tecnico->view();
				return $datos;
			}else{
				$this->tecnico->set("nombre", $_POST['nombre']);
					$this->tecnico->set("edad", $_POST['edad']);
					$this->tecnico->set("calificacion", $_POST['calificacion']);
					$this->tecnico->set("id_seccion", $_POST['id_seccion']);
				$this->tecnico->edit();
				header("Location: " . URL . "tecnicos");
			}
		}
		public function listarSecciones(){
			$datos = $this->seccion->listar();
			return $datos;
		}
		public function ver($id){
			$this->tecnico->set("id",$id);
			$datos = $this->tecnico->view();
			return $datos;
		}
		public function eliminar($id){
			$this->tecnico->set("id",$id);
			$this->tecnico->delete();
			header("Location: " . URL . "tecnicos");
		}
}
	$tecnicos = new tecnicosController();
?>