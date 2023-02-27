<?php
class ContaBanco
{
    private $nome;
    private $saldo;
    private $cpf;
    private static $numeroDeContas = 0;

    public function __construct($nome, $cpf, $saldo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = $saldo;
        self::$numeroDeContas += 1;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}

$contaBanco = new ContaBanco('guilherme', '23123', 200);

var_dump($contaBanco->getNome());
var_dump($contaBanco->recuperaNumeroDeContas());


?>