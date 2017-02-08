
<?php
	/*usando o "& " cria-se uma referencia entre variaveis, qualquer alteraçao feita em uma 
	altera a outra
	*/
	$a= 5;
	$b=&$a;
	$b=10;
	echo $a;
	echo $b;
?>