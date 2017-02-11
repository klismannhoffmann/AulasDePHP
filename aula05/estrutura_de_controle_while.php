<?php
// sempre tera uma expressao para avalia
$numero = 0;
while ( $numero < 100 ) {
	echo $numero . "\n";
	$numero ++;
}
echo'</br>';
while ( $numero >= 100 && $numero<110 ) {
	echo '<input type="TEXT" name="'.$numero.'"/></br>';
	$numero ++;
}

?>

