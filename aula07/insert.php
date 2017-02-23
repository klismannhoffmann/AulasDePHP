<?php

//Abrir a Conexão com o Banco de Dados
$link = mysqli_connect ( '127.0.0.1', 'root', '' );
$conexao = mysqli_select_db ( $link, 'maestro' );

//Faz uso do Banco de Dados
//Busca os dados
$sql = "insert into usuarios(id,nome,usuario,senha) values(null,'NOME','nome','1234')";// faz mudanças no banco de dados 
$resultado= mysqli_query($link,$sql);
mysqli_close($link);

?>