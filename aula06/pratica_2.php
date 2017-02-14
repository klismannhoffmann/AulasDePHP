
<a href="pratica_2?menu=aluno">aluno</a>
<a href="pratica_2?menu=professor">professor</a>
<?php
if (isset ( $_GET ['menu'] )) 
	{
	if ($_GET ['menu'] == 'aluno') {
		echo 'aluno';
	} elseif ($_GET ['menu'] == 'professor') {
		echo 'professor';
	}
}
?>
