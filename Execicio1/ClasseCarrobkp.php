<?php 
 	class Carro { 
	public $motor, $modelo, $cor, $marca, $ano, $cambio;
 	
	public function setMotor($motor) {
		$this-> motor = $motor;
	}
	public function getMotor(){
		return $this->motor;
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	public function getModelo(){
		return $this->modelo;
	}
	public function setCor($cor){
		$this->cor = $cor;
	}
	public function getCor(){
		return $this->cor;
	}
	public function setMarca($marca){
		$this->marca = $marca;
	}
	public function getMarca(){
		return $this->marca;
	}
	public function setAno($ano){
		$this->ano = $ano;
	}
	public function getAno(){
		return $this->ano;
	}
	public function setCambio($cambio){
		$this->cambio = $cambio;
	}
	public function getCambio(){
		return $this->cambio;
	}
 	}

?>