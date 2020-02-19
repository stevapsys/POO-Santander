<?php
require 'CCorrente.php';

$conta = new CCorrente(1000);

$conta->sacar(500);
$conta->depositar(100);
echo "saldo  = ". $conta->consultarSaldo();

var_dump($conta);
die; 
?>