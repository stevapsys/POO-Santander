<?php
require('Contas.php');

class CCorrente extends Contas {
    protected $chequeEspecial = 200;

  //  public function __construct($saldo, $limite) {
  //      parent::__construct($saldo);
  //  }

    public function despositarCheque() {

    }

    public function sacar($valor) {
    // Quando o meu saldo for 0 aí eu acesso o limite
        $saldo = $this->saldo; 

        $saldoComLimite = $this->saldo + $this->chequeEspecial;

        if ($saldoComLimite >= $valor) {
        $this->saldo -= $valor;
        } else {
        echo "É impossível sacar.";
        die; 
        }
    }
}
?>
