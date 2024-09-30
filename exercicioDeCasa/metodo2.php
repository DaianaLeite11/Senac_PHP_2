
<?php

$lista1 =[];
$lista2 =[];

for($i=0; $i<4; $i++){
    $numero = readline('digite um número: ');
    
    $lista1[$i]=$numero;
    
}
echo " essa é a lista 1\n";   
print_r($lista1);
    
     If($numero>10){
        $lista2[$i]=$lista1[$i];
        
    }
    echo " essa é a lista 2\n";   
    print_r($lista2);
   

//print("Existem $saoMaiores numeros maiores que 10\n")
?>