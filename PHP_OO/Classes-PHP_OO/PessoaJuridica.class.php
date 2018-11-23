<?php

require './Pessoa.class.php';
class PessoaJuridica  extends Pessoa{
    public $cnpj;
    public $razaoSocial;
}

$uchoaMaster = new PessoaJuridica();
$uchoaMaster->nome = "UchoaMaster";
$uchoaMaster->cnpj = '54545454411254/215454-25';
$uchoaMaster->razaoSocial = 'AEUHAEHUE';

echo $uchoaMaster->nome;

