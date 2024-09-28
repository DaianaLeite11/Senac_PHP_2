<?php
/*usuario digita 10 numeros
programa fala quantos deles maior que 10
prgunta 1: como verifico se o numero ´é maios que 10? R: if(numero>10)
pergunta 2: como faço para contar quantos numeros maiores que existem 
levando em conta o que o usuario digitou?  */

$saoMaiores=0;

for($i=0; $i<10; $i++){
    $numero = readline('digite um número: ');
    If($numero>10){
        $saoMaiores++;
    }
    }
   

print("Existem $saoMaiores numeros maiores que 10\n")
?>