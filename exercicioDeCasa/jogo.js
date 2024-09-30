number1 = 'pedra'
number2 = 'papel'



if(number1=='pedra' && number2=='tesoura'){
    console.log('ganhou o jogador 1')
}
else if (number1=='tesoura' && number2=='papel'){
    console.log('ganhou o jogador 1')
}
else if (number1=='papel' && number2=='pedra'){
    console.log('ganhou o  jogador1')
}
else if (number1===number2){
    console.log('os dois jogadores perdem')
}
   
else{
    console.log('o jogador 2 ganha')
}

