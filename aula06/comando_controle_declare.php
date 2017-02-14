<?php
declare ( ticks = 5 ); // Informa a cada quantos comandos deve ser executado a function apartir dele
register_tick_function ( 'j_tick' );

echo '1';
echo '2';
echo '3';
echo '4';
echo '5';
echo '6';
echo '7';
echo '8';
echo '9';
echo '10';
echo '11';
function j_tick() {	echo 'J'; }// a cada 5 comandos ele emprimi j antes do ultimo comando

?>

