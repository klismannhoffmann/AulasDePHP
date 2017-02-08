<?php
	/* print_r-> imprime conteudo de uma variavel explanativa assim com var_dump(),
	   mas em um formato mais legivel para o programador com os conteudos alinhados
		e suprimindo os tipos de dados.  
		print_r-> possui um segundo parametro chamada return que quando setada em true imprime na memoria.
	*/
	print_r('olá mundo');
	print_r("olá mundo");
	print_r("olá \n mundo");
	print_r('olá \n mundo');
	$planeta="Terra";
	print_r($planeta);
	echo"\n";
	$planetas=array('terra','marte','saturno');
	print_r($planetas)
?>