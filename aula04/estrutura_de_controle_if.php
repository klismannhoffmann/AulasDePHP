<?php
/*$a = 17;
if ($a >= 18) {
	echo 'PODE TIRAR CARTEIRA';
}

if ($a < 18) {
	echo 'Não Pode tirar';
}
*/
$c = 'true';
$b='true';

if ($c) {
	echo '1';
}
if (! $c) {
	echo '2';
}
if ($c + $b) {
	echo '3';
}
if ($c or true) {
	echo '4';
}

?>