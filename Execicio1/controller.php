<?php
	$motor = filter_input(INPUT_POST, "motor");
	$modelo = filter_input(INPUT_POST, "modelo");
	$cor = filter_input(INPUT_POST, "cor");
	$marca = filter_input(INPUT_POST, "marca");
	$ano = filter_input(INPUT_POST, "ano");
	$cambio = filter_input(INPUT_POST, "cambio");
	$cilindro= filter_input(INPUT_POST, "cilindro");
	$potencia= filter_input(INPUT_POST, "potencia");
	$giroatual= filter_input(INPUT_POST, "giroatual");
	$combustivel= filter_input(INPUT_POST, "combustivel");


	/*echo "Motor = " . $motor ; 
	echo "<br>Modelo = " . $modelo ; 
	echo "<br>Cor = " . $cor ;
	echo "<br>Marca = " . $marca ;
	echo "<br>Ano = " . $ano ;
	echo "<br>Cambio = " . $cambio ;
*/
	include ("ClasseCarro.php");
	$objetoCarro = new Carro();
	$objetoCarro->motor=$motor;
	$objetoCarro->modelo=$modelo;
	$objetoCarro->cor=$cor;
	$objetoCarro->marca=$marca;
	$objetoCarro->ano=$ano;
	$objetoCarro->cambio=$cambio;

/*	class Motor {
	public $cilindro, $potencia, $giroatual, $combustivel;
	}
*/

	include ("ClasseMotor.php");
	$objetoMotor = new Motor();
	$objetoMotor->cilindro=$cilindro;
	$objetoMotor->potencia=$potencia;
	$objetoMotor->giroatual=$giroatual;
	$objetoMotor->combustivel=$combustivel;

	echo "<fieldset>";
	echo "<h1>Dados do Carro</h1>";
	echo "Motor = " . $objetoCarro->motor;
	echo "<br>Modelo = " . $objetoCarro->modelo;
	echo "<br>Cor = " . $objetoCarro->cor;
	echo "<br>Marca = " . $objetoCarro->marca;
	echo "<br>Ano = " . $objetoCarro->ano;
	echo "<br>Cambio = " . $objetoCarro->cambio;
	echo "<br>Cilindros = " . $objetoMotor->cilindro;
	echo "<br>Potencia = " . $objetoMotor->potencia;
	echo "<br>Giro Atual = " .$objetoMotor->giroatual;
	echo "<br>Combustivel = " . $objetoMotor->combustivel;
	var_dump($objetoCarro);
	print_r($objetoCarro);
	var_dump($objetoMotor);
	print_r($objetoMotor);

?>
