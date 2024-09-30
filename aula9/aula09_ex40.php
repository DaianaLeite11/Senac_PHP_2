<?php
/* Digitar 10 numeros, somar  e fazer a mé<dia */

$lista =[];
$somatorio = 0;

 for($i=0; $i<10; $i++){
    $numero = readline('digite um número: ');

    // Usando lista
    $lista[$i]=$numero;

    // sem usar lista
    $somatorio += $numero;
}

echo "a soma é $somatorio\n";
/* echo "a soma é: " .array_sum($lista). "\n"
$media = array_sum($lista)/count($lista);
*/

$media = $somatorio/10;
echo "A media é : $media\n";
?>