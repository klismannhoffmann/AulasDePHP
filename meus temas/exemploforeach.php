<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
	$value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)

// sem um unset($value), $value continuará como referência ao último item: $arr[3]

foreach ($arr as $key => $value) {
	// $arr[3] será atualizado com cada valor de $arr...
	echo "{$key} => {$value} ";
	print_r($arr);
}
// ...até que, o segundo e último valor é copiado para o último valor

// saída:
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
?>