<?php

$c = '18';
$b = '8';
$a = '6';
if ($a > $b)
{
	echo 'Voce tem mais dinheiro que a Laura';
}
elseif ($a == $b)
{
	echo 'Voces tem a mesma quantia';
}
elseif(($a<$c) && ($c<$b))
{
	echo 'Agora voces tao perdido';
}

else {
	echo 'Nenhuma condição encontrada';
}

?>
