<?php
/*
Usuario digita uum numero
Computador escolhe um numero
Se a soma dos 2 numeros forem par o usuario vence
Se for impar, o computador vence
*/

function ehParOuImpar($usuario,$computador){
    $soma = $computador + $usuario;
    if($soma%2==0){
        echo "Usuário ganhou!!\n";
    }
    else{
        echo "\nComputador ganhou!\n";
    }
}
$usuario = readline("Digite um número:  ");
$computador = rand(1,100);
echo $computador;

ehParOuImpar($usuario,$computador);
?>