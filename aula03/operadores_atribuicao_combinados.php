<?php
//é uma junção de operadores aritmeticos, array, string
$a=$b=1;
echo $a+=$b;
echo $a-=$b;
echo $a*=$b;
echo $a/=$b;
echo $a%=$b;
echo $a**$b;

$c='ola';
$d=" ";
$e='turma';
echo $c .=$d;
echo $c .=$e;

$f=array('brasil','campeão');
$g=array('Copa do MUNDO');
$f +=$g;
print_r($f);


?>