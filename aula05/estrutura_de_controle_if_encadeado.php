<?php
$salario=1020; // R$
$tempo_servico=9; // meses
$tem_reclamacoes=false; // boleano
if ($salario > 1000) 
	{
		if($tempo_servico >= 12)
		{
			if ($tem_reclamacoes != true)
			{
				echo 'parabéns, você foi promovido 1';
			}
		}
	}
	if(($salario>1000)and($tempo_servico>=12)and($tem_reclamacoes!=true))
		{
			echo'parabéns, voce foi promovido';
	    }	
?>			