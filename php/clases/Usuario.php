<?php
class Usuario{
	private $id;
	private $nick;
	private $nombre;
	private $apellidos;
	private $ciudad;
	private $fecha_nac;
	private $email;
	private $contraseña;
	private $sobre_mi;
	private $foto;
	private $permite_mensajes;

	public function __construct($id, $nick, $nombre, $apellidos, $ciudad, $fecha_nac, $email, $contraseña, $sobre_mi, $foto, $permite_mensajes){
		$this->id = $id;
		$this->nick = $nick;
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->ciudad = $ciudad;
		$this->fecha_nac = $fecha_nac;
		$this->email = $email;
		$this->contraseña = $contraseña;
		$this->sobre_mi = $sobre_mi;
		$this->foto = $foto;
		$this->permite_mensajes = $permite_mensajes;
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

	public function get_apellidos(){
		return $this->apellidos;
	}

	public function set_apellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function get_ciudad(){
		return $this->ciudad;
	}

	public function set_ciudad($ciudad){
		$this->ciudad = $ciudad;
	}

	public function get_fecha_nac(){
		return $this->fecha_nac;
	}

	public function set_fecha_nac($fecha_nac){
		$this->fecha_nac = $fecha_nac;
	}

	public function get_email(){
		return $this->email;
	}

	public function set_email($email){
		$this->email = $email;
	}

	public function get_contraseña(){
		return $this->contraseña;
	}

	public function set_contraseña($contraseña){
		$this->contraseña = $contraseña;
	}

	public function get_sobre_mi(){
		return $this->sobre_mi;
	}

	public function set_sobre_mi($sobre_mi){
		$this->sobre_mi = $sobre_mi;
	}

	public function get_foto(){
		return $this->foto;
	}

	public function set_foto($foto){
		$this->foto = $foto;
	}

	public function get_permite_mensajes(){
		return $this->permite_mensajes;
	}

	public function set_permite_mensajes($perimte_mensajes){
		$this->permite_mensajes = $permite_mensajes;
	}
}

$isaac = new Usuario(0, "isaaclpz94", "Isaac", "López Delgado", "Granada", date("d-m-Y", strtotime("07/07/1994")), "isaaclopez2894@hotmail.com", "isaac13esther", null, "foto.jpg", true);

echo ($isaac->get_permite_mensajes()) ? "si" : "no";
?>