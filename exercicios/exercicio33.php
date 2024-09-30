<?php
/* usuario insere a idade
se menor de idade -> imprima 3 programas infantis
se maior de idade -> imprima 3carros com seus preços
*/
function listarcarros(){
    echo "Opala, R$ 60.000\nVectra, R$ 15.000\nGol, R$75.000\n";
}
function listarProgramasInfantis(){
    echo "Tom&Jerry\nPica-Pau\nLoney Tunes\n";
}
$idade=readline("digite sua idade ");

if($idade>=18){
    listarcarros();
}
else {
    listarProgramasInfantis();
}
?>