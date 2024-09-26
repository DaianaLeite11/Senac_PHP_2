<?php
$jogador1 = readline("Escolha entre papel, pedra ou tesoura \n faça a sua jogada ");
//$jogador2 = readline("faça a sua jogada ");

while ($jogador1!= "pedra" && $jogador1!= "papel" && $jogador1!= "tesoura"){
    $jogador1 = readline("Escolha entre papel, pedra ou tesoura\n faça a sua jogada ");  
}
$jogadas = ["pedra","papel","tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)];

echo " a jogada do jogador 2 é $jogador2 \n";
if(($jogador1=== "pedra" && $jogador2 ==="tesoura" ) || 
($jogador1==="tesoura " && $jogador2 === "papel") ||
($jogador1==="papel" && $jogador2 === "pedra")) {
    echo "jogador 1 ganhou! \n";
}
else if ($jogador1===$jogador2){
    echo "Empate \n";
}
else {
    echo "jogador 2 ganhou! \n";
}
?>
