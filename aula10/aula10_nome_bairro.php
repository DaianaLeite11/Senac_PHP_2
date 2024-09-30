<?php
/* digite 10 nomes de pessoas e seus bairros
imprima em ordem alfabetica pela nome da pessoa
*/

$cadastro = [];
for($i=0; $i<4; $i++){
    $nome = readline("Digite o nome ");
    $bairro = readline("digite seu bairro ");
    array_push($cadastro, [$nome, $bairro]);
}
sort($cadastro);
foreach($cadastro as $pessoa ) { 
    print ($pessoa[0]. ", ".$pessoa[1]."\n");
}

?>