<?php
// contar ate 100 até o numero que o usuário digita
// leia a linha qua a pessoa digitar

$usuario = readline("Digite um número: "); 
echo $usuario;
for($i=$usuario; $i<=100; $i++){
    echo "$i \n";
}
?>

