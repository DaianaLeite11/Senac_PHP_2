<?php

$doces = [['paçoca', 8.5], ['bananada', 3], ['jujuba', 7], ['brigadeiro', 7], 
['bolo de cenoura com cobertura de chocolate', 10] ];

// como alterar a nota da bananada?

$doces[1][1]=4;

// Esse print diz os itens do array como numero das suas posições

//print_r($doces);

// o . concatena as informações
// esse gera os elementod da matrix
foreach($doces as $elem){
    print($elem[0]." ".$elem[1]. "\n");
}
?>