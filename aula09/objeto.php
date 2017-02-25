
<?php
//insere a classe
include_once 'produto.php';
// cria um objeto
$produto = new Produto;
// atribuir valores
$produto->codigo = 4000;
$produto->descricao = 'CD - The Best of Eric Clapton';
$produto-> imprimeEtiqueta();
echo $produto->codigo."</br> \n"; // imprimir atributo especifico so funciona versao 5.6 resultado resperado #1
?>


<?php
// criando e manipulando 2 obj
// insere a classe
include_once 'Produto.php';
// cria dois objetos
$produto1 = new Produto;
$produto2 = new Produto;
// atribuir valores
$produto1->codigo = 4001;
$produto1->descricao = 'CD - The Best of Eric Clapton';
$produto2->codigo = 4002;
$produto2->descricao = 'CD - The Eagles Hotel California';
// imprime informações de etiqueta
$produto1->imprimeEtiqueta();
$produto2->imprimeEtiqueta();
?>