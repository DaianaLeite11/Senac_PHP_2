<?php

$grade = [];


for($i=0; $i<5; $i++){
    
    $nome = readline("Digite o nome ");
    $nota = readline("digite a nota "); 
        while($nota != 0 && $nota!=1  && $nota!=2 && $nota!=3 && $nota!=4 && $nota!=5 
        && $nota!=6 && $nota!=7 && $nota!=8 && $nota!=9 && $nota!=10){
            $nota = readline("digite a nota "); 
        }

    }
      
    array_push($grade, [$nome, $nota]); 


?>