<?php
/*
// inicialmente eu declaro a função
function soma($a,$b){
    echo $a + $b;
  
}
*/
function soma2($numero1, $numero2){
    return ($numero1 + $numero2);

}
// ao adicionar o comando return ele não executa NADA abaixo dele no bloco de chaves

$a =1;
$b = 2;
// soma($a,$b); // É necessário chamar a função para executa-la!!!

$resultado = soma2($a, $b); /* o programa retorna pq mesmo tendo variavel com nome diferente ele pensa 
que é a mesma variável pela posição */
echo $resultado;

//echo $a + $b;

?>