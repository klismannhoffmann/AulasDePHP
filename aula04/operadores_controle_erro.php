<?php

/* Erro de arquivo intencional */
$my_file = @file ( 'arquivo_nao_existente' ) or die ( "Falha abrindo arquivo: '$php_errormsg'" );
$value = @$cache[$key]; // você não receberá nenhum aviso se a chave $key não existir.
print_r( $value );
?>