<?php
// vamos criar um sistema bancario com
// saque, depósito, extrato, transferencia


class Conta{
    public $saldo;
    public $numeroDaConta;
    public $titular;
    public $extrato;

    public function __construct($titular, $numeroDaConta, $saldo=0) {
        $this->titular = $titular;
        $this->numeroDaConta = $numeroDaConta;
        $this->saldo = $saldo;
        $this->extrato = [];
    }
    public function saque($valor){
// valor que quero sacar
        if ($valor<0){
            echo "valor invalido \n";
        }
        else if($this->saldo>= $valor){
            $this->saldo= $this->saldo - $valor;
            $saida = "saque realizado com sucesso!.\n 
            Saldo Atual: $this->saldo.\n";
            array_push($this->extrato, $saida);
        }
        else{
            echo "Saldo insuficiente \n";
        }
       
    }

    public function deposito($valor){
        if ($valor <= 0){
            echo "Valor inválido.\n";
        }
        elseif($valor>0){
            $this->saldo += $valor;
            $saida = " deposito realizado com sucesso.\n";
            $saida = $saida . " saldo atual:R$ $this->saldo.\n";
            array_push($this->extrato, $saida);
        }
        else{
            echo"valor inválido";
        }
    }
    public function transferencia($destinatario, $valor){
        if ($valor <= 0){
            echo "Valor inválido.\n";
        }
        elseif ($this->saldo >= $valor){
            $this->saldo -= $valor;
            $destinatario->saldo += $valor;
            $saida = "transferencia efetuada com sucesso.\n";
            $saida = $saida . "$destinatario->titular recebeu $valor.\n";
            $saida = $saida . "Saldo atual: $this->saldo.\n";
            array_push($this->extrato, $saida);

            $saida2 = "transferencia efetuada com sucesso.\n";
            $saida2 = $saida2 . "$this->titular enviou $valor.\n";
            $saida2 = $saida2 . "Saldo atual: $destinatario->saldo.\n";
            array_push($destinatario->extrato, $saida2);


        }
        else{
            echo "Saldo insuficiente.\n";
        }
    }

    public function verificarExtrato(){
        echo "extrato do(a) $this->titular.\n";
        foreach($this->extrato as $operacao){
            echo $operacao;
        }
        echo "fim do extrato!";
        echo str_repeat('-', 30)."\n";
    }
    }
    $conta1 = new Conta("ana", "1520", 500);
    $conta2 = new Conta("bia", "1528", 1500);
    $conta1->saque(50);
    $conta1->deposito(100);
    $conta1->transferencia($conta2, 200);
    $conta1->verificarExtrato();
    $conta2->verificarExtrato();
?>
?>