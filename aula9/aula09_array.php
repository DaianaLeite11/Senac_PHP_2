<?php

$lista = ['café', 'açúcar', 'manteiga', 'pão'];

// push adiciona o elemento no final da lista

array_push($lista, "queijo");

//echo $lista[1]

/* echo count($lista); 
o count diz quantos elememtos tem na lista */

 for ($i=0; $i<=3; $i++){

    echo "$lista[$i]\n";
}
// ou

 echo " \n Segundo metodo\n";
for ($i=0; $i<count($lista); $i++){

    echo "$lista[$i]\n";
}


// terceiro metodo para declara os itens da lista

echo " \n terceiro metodo \n";

// o sort coloca a lista em ordem alfabética ou crescente!!

sort($lista);

foreach ($lista as $item){
    echo "$item\n";
}


/*o pop remove o ultimo elemento da lista
Se colocar em uma variável ele guarda o que foi retirado nessa nova variável */

echo "\n elemento retirado\n";

$ultimo = array_pop($lista);
echo $ultimo;
?>