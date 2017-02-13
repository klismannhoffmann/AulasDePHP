<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
	$value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)

// sem um unset($value), $value continuar� como refer�ncia ao �ltimo item: $arr[3]

foreach ($arr as $key => $value) {
	// $arr[3] ser� atualizado com cada valor de $arr...
	echo "{$key} => {$value} ";
	print_r($arr);
}
// ...at� que, o segundo e �ltimo valor � copiado para o �ltimo valor

// sa�da:
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
?>