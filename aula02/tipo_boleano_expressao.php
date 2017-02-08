<?php
// declara a variavel numerica
$umidade = 88;
// testa se é maior que 90. Retorna um boolean
$vai_chover = ($umidade > 90);
// testa se $vai_chover é verdadeiro
if ($vai_chover) {
	echo ' Esta Chovendo';
} else {
	echo'nao esta chovendo';
}
?>