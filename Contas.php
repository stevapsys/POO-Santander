<?php
abstract class Contas {
    protected $saldo;

    // '__' é especial da classe
    //__construct = para pegar o saldo e atribuir a classe quando inicia ela
    public function __construct($saldo){
        $this->saldo = $saldo;

    }

    public function depositar ($valor) {
        //para adicionar o valor no saldo
        //$this pega a própria classe
        $this->saldo += $valor; 
    }
    public function sacar ($valor) {
        //criar uma condição para ver se tem saldo para sacar
        if ($this->saldo >= $valor) {
        //se tiver, retirar o valor do saque do saldo 
        $this->saldo -= $valor;
        } else {
            echo "É impossível sacar.";
            die; 
        }
    }
    public function consultarSaldo () {
        //mostrar o valor que tem no saldo 
        return $this->saldo; 
    }
}

?>