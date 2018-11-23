<?php

require './Pessoa.class.php';
class PessoaFisica extends Pessoa {
    public $cpf;
}

$carlos = new PessoaFisica();
$carlos->nome = "Carlos Uchôa<br>";
$carlos->email = "carlosjuchoa@hotmail.com<br>";
$carlos->cpf ='76687740253<br>';
echo $carlos->nome;
echo $carlos->cpf;
echo $carlos->email;

