<?php
class Deporte{
	private $id;
	private $nombre;
	private $imagen;
	private $icono;

	public function __construct($id, $nombre, $imagen, $icono){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->imagen = $imagen;
		$this->icono = $icono;
	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id = $id;
	}

	public function get_nombre(){
		return $this->nombre;
	}

	public function set_nombre($nombre){
		$this->nombre = $nombre;
	}

	public function get_imagen(){
		return $this->imagen;
	}

	public function set_imagen($imagen){
		$this->imagen = $imagen;
	}

	public function get_icono(){
		return $this->icono;
	}

	public function set_icono($icono){
		$this->icono = $icono;
	}
}

$futbol = new Deporte(0, "Fútbol", "foto.jpg", "icono.jpg");

echo $futbol->get_nombre();
?>