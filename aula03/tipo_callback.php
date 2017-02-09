<?php
//uma funçao que se executa e logo apois chamha outra
function barber($type)
{
	echo "Voce que um tipo de cabelo $type , sem problemas\n";
}
call_user_func('barber', "cogumelo");
call_user_func('barber', "carreca");
?>