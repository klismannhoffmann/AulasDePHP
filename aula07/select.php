<html>
<?php
//Abrir a Conexão com o Banco de Dados
$link = mysqli_connect ( '127.0.0.1', 'root', '' );
$conexao = mysqli_select_db ( $link, 'maestro' );

//Faz uso do Banco de Dados
	//Busca os dados
$sql = "select * from usuarios";
$var = mysqli_query ( $link, $sql );

?>
<table class="table table-striped table-bordered table-hover">
<tr>
	<td>ID</td>
	<td>Nome</td>
	<td>Usuario</td>
	<td>Senha</td>
</tr>

<?php while ( $row = mysqli_fetch_assoc ( $var ) ) { ?>
	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['nome'];?></td>
		<td><?=$row['usuario'];?></td>
		<td><?=$row['senha'];?></td>
	<tr>
<?php } ?>
</table>

<?php mysqli_close ( $link ); ?>

</html>