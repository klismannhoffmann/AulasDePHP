<?php
//Abrir Conexão
$link = mysqli_connect('localhost','root','','maestro');


$resultado = mysqli_query($link, "select id_matricula, id_aluno, id_curso from matricula");
if(mysqli_num_rows($resultado)){
	
	while($row = mysqli_fetch_assoc($resultado)){
		
		echo 'CODIGO MATRICULA: '. $row['id_matricula'];
				
		$dados_aluno = mysqli_query($link, "SELECT id_aluno, nome,endereco,cpf,email,datanascimento,responsavel,telefone  FROM aluno WHERE id_aluno=".$row['id_matricula']);
		if(mysqli_num_rows($dados_aluno)){
			
			$aluno = mysqli_fetch_row($dados_aluno);
			
			echo 'NOME ALUNO:'.$aluno['nome']."</br> \n";
			echo 'ENDEREÇO:'.$aluno['endereco']."</br> \n";
			echo 'CPF:'.$aluno['cpf']."</br> \n";
			
		}
		
		
		$dados_curso = mysqli_query($link, "SELECT * FROM curso WHERE id_curso = " . $row['id_curso'] );
		if(mysqli_num_rows($dados_curso)){
			
			$curso = mysqli_fetch_row($dados_curso);
			
			echo 'NOME DO CURSO:'.$curso['nome'];
		}
		
		
	}
}
?>