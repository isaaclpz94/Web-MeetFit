<?php
class Equipo{
	private $id;
	private $nick;
	private $nombre;
	private $contraseña;
	private $descripcion;
	private $foto;

	public function __construct($id, $nick, $nombre, $contraseña, $descripcion, $foto){
		$this->id = $id;
		$this->nick = $nick;
		$this->nombre = $nombre;
		$this->contraseña = $contraseña;
		$this->descripcion = $descripcion;
		$this->foto = $foto;
	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id = $id;
	}

	public function get_nick(){
		return $this->nick;
	}

	public function set_nick($nick){
		$this->nick = $nick;
	}

	public function get_nombre(){
		return $this->nombre;
	}

	public function set_nombre($nombre){
		$this->nombre = $nombre;
	}

	public function get_contraseña(){
		return $this->contraseña;
	}

	public function set_contraseña($contraseña){
		$this->contraseña = $contraseña;
	}

	public function get_descripcion(){
		return $this->descripcion;
	}

	public function set_descripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function get_foto(){
		return $this->foto;
	}

	public function set_foto($foto){
		$this->foto = $foto;
	}
}

$futboleros = new Equipo(0, "ftbl", "Futboleros FC", "passwd", "Somos los futboleros", "foto.jpg");

echo $futboleros->get_foto();
?>