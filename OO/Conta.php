<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    } 

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}


$openCont = new Conta();
$openCont2 = new Conta();

$openCont->depositar(100);
$openCont->depositar(10);

$openCont->sacar(7);

$openCont->transferir(20, $openCont2);

var_dump($openCont->getSaldo());

?>