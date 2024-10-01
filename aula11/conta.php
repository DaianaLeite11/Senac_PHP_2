<?php
// vamos criar um sistema bancario com
// saque, depósito, extrato, transferencia


class Conta{
    public $saldo;
    public $numeroDaConta;
    public $titular;

    public function __construct($titular, $numeroDaConta, $saldo=0) {
        $this->titular = $titular;
        $this->numeroDaConta = $numeroDaConta;
        $this->saldo = $saldo;
    }
    public function saque($valor){
// valor que quero sacar
        if ($valor<0){
            echo "valor invalido \n";
        }
        else if($this->saldo>= $valor){
            $this->saldo= $this->saldo - $valor;;
            echo "saquue realizado com sucesso!.\n
            Saldo Atual: $this->saldo.\n";
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
            echo" deposito realizado com sucesso.\n";
            echo " saldo atual:R$ $this->saldo.\n";
        }
        else{
            echo"valor inválido";
        }
    }
    }
    $conta1 = new Conta("ana", "1520", 500);
    $conta1->deposito(50);
?>