<?php
$imovel[]='93';
$imovel[]='96';
$resultado[] = ($imovel[0] == $imovel[1]);
$resultado[] = ($imovel[0] === $imovel[1]);
$resultado[] = ($imovel[0] != $imovel[1]);
$resultado[] = ($imovel[0] != $imovel[1]);
$resultado[] = ($imovel[0] !== $imovel[1]);
$resultado[] = ($imovel[0] < $imovel[1]);
$resultado[] = ($imovel[0] > $imovel[1]);
$resultado[] = ($imovel[0] <= $imovel[1]);
$resultado[] = ($imovel[0] >= $imovel[1]);
$resultado[] = ($imovel[0] === $imovel[1]);
$resultado[]=($imovel[0] === $imovel [1]);
$resultado[] = ($imovel[0] ?? $imovel[1]);
var_dump ( $resultado );

?>