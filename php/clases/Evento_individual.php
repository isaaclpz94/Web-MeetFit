<?php
class Evento_individual{
	private $id;
	private $nombre;
	private $lugar;
	private $fecha;
	private $duracion;
	private $precio;
	private $info_adicional;
	private $num_participantes;
	private $num_ganadores;
	private $deporte_id;
	private $usuario_id;

	public function __construct($id, $nombre, $lugar, $fecha, $duracion, $precio, $info_adicional, $num_participantes, $num_ganadores, $deporte_id, $usuario_id){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->lugar = $lugar;
		$this->fecha = $fecha;
		$this->duracion = $duracion;
		$this->precio = $precio;
		$this->info_adicional = $info_adicional;
		$this->num_participantes = $num_participantes;
		$this->num_ganadores = $num_ganadores;
		$this->deporte_id = $deporte_id;
		$this->usuario_id = $usuario_id;
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

	public function get_lugar(){
		return $this->lugar;
	}

	public function set_lugar($lugar){
		$this->lugar = $lugar;
	}

	public function get_fecha(){
		return $this->fecha;
	}

	public function set_fecha($fecha){
		$this->fecha = $fecha;
	}

	public function get_duracion(){
		return $this->duracion;
	}

	public function set_duracion($duracion){
		$this->duracion = $duracion;
	}

	public function get_precio(){
		return $this->precio;
	}

	public function set_precio($precio){
		$this->precio = $precio;
	}

	public function get_info_adicional(){
		return $this->info_adicional;
	}

	public function set_info_adicional($info_adicional){
		$this->info_adicional = $info_adicional;
	}

	public function get_num_participantes(){
		return $this->num_participantes;
	}

	public function set_num_participantes($num_participantes){
		$this->num_participantes = $num_participantes;
	}

	public function get_num_ganadores(){
		return $this->num_ganadores;
	}

	public function set_num_ganadores($num_ganadores){
		$this->num_ganadores = $num_ganadores;
	}

	public function get_deporte_id(){
		return $this->deporte_id;
	}

	public function set_deporte_id($deporte_id){
		$this->deporte_id = $deporte_id;
	}

	public function get_usuario_id(){
		return $this->usuario_id;
	}

	public function set_usuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}
}

$partido = new Evento_individual(0, "Partio furbol", "mikasa", date("d-m-Y"), 2, 5, "informacion", 10, 5, 1, 3);

echo $partido->get_usuario_id();
?>