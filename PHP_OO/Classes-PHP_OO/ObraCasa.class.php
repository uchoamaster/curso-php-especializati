<?php
require './Obra.class.php';

class ObraCasa  extends Obra{
    
}
//auqi to criando os objetos para manipular as variaveis e atributos
$obraCasaDoJoao = new ObraCasa();
$obraCasaDoJoao->nomeObra = 'Obra do João';
$obraCasaDoJoao->tamanhoLote = 2500;
$obraCasaDoJoao->altura = 10;
$obraCasaDoJoao->largura = 2000;
$obraCasaDoJoao->mostraDadosObra();
