<?php
class Mensaje{
	private $id;
	private $titulo;
	private $cuerpo;
	private $estado;
	private $usuario_emisor_id;
	private $usuario_receptor_id;
	private $equipo_emisor_id;
	private $equipo_receptor_id;

	public function __construct($id, $titulo, $cuerpo, $estado, $usuario_emisor_id, $usuario_receptor_id, $equipo_emisor_id, $equipo_receptor_id){
		$this->id = $id;
		$this->titulo = $titulo;
		$this->cuerpo = $cuerpo;
		$this->estado = $estado;
		$this->usuario_emisor_id = $usuario_emisor_id;
		$this->usuario_receptor_id = $usuario_receptor_id;
		$this->equipo_emisor_id = $equipo_emisor_id;
		$this->equipo_receptor_id = $equipo_receptor_id;
	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id = $id;
	}

	public function get_titulo(){
		return $this->titulo;
	}

	public function set_titulo($titulo){
		$this->titulo = $titulo;
	}

	public function get_cuerpo(){
		return $this->cuerpo;
	}

	public function set_cuerpo($cuerpo){
		$this->cuerpo = $cuerpo;
	}

	public function get_estado(){
		return $this->estado;
	}

	public function set_estado($estado){
		$this->estado = $estado;
	}

	public function get_usuario_emisor_id(){
		return $this->usuario_emisor_id;
	}

	public function set_usuario_emisor_id($usuario_emisor_id){
		$this->usuario_emisor_id = $usuario_emisor_id;
	}

	public function get_usuario_receptor_id(){
		return $this->usuario_receptor_id;
	}

	public function set_usuario_receptor_id($usuario_receptor_id){
		$this->usuario_receptor_id = $usuario_receptor_id;
	}

	public function get_equipo_emisor_id(){
		return $this->equipo_emisor_id;
	}

	public function set_equipo_emisor_id($equipo_emisor_id){
		$this->equipo_emisor_id = $equipo_emisor_id;
	}

	public function get_equipo_receptor_id(){
		return $this->equipo_receptor_id;
	}

	public function set_equipo_receptor_id($equipo_receptor_id){
		$this->equipo_receptor_id = $equipo_receptor_id;
	}
}

$mensaje = new Mensaje(0, "Mensaje para webesiyo", "Webesiyo dise k te kiere", 1, 2, 3, null, null, null);

echo $mensaje->get_equipo_emisor_id();
?>