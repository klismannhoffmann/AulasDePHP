<?php
class caneta {
	var $cor;
	var $forma;
	var $material;
	function risca() {
		echo 'Riscando';
	}
}

$obj = new caneta;
$obj->cor = 'vermelha';
$obj->forma = 'redonda';
$obj->material = 'plastico';
print_r ($obj);
$obj2= new caneta;
$obj2->cor='preta';
$obj2->forma='redonda';
$obj2->material='ouro';
print_r($obj2);

?>
	
	