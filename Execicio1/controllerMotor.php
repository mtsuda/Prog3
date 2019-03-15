<?php
	$motor = filter_input(INPUT_POST, "motor");
	$modelo = filter_input(INPUT_POST, "modelo");
	$cor = filter_input(INPUT_POST, "cor");
	$marca = filter_input(INPUT_POST, "marca");
	$ano = filter_input(INPUT_POST, "ano");
	$cambio = filter_input(INPUT_POST, "cambio");


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



	echo "<fieldset>";
	echo "<h1>Dados do Carro</h1>";
	echo "Motor = " . $objetoCarro->motor;
	echo "<br>Modelo = " . $objetoCarro->modelo;
	echo "<br>Cor = " . $objetoCarro->cor;
	echo "<br>Marca = " . $objetoCarro->marca;
	echo "<br>Ano = " . $objetoCarro->ano;
	echo "<br>Cambio = " . $objetoCarro->cambio;
	var_dump($objetoCarro);
	print_r($objetoCarro);

?>
