<?php
require './Obra.class.php';

class ObraPredio extends Obra{
        //se eu tiver um atributo especifico de cada classe basta eu criar e adicionar na classe especifica
    public $totalAndares;
    }
    //objetos e atributos da nossa obra
    $obraPredioDoPedro = new ObraPredio(); 
    $obraPredioDoPedro->nomeObra = 'Prédio do Pedro'; 
    $obraPredioDoPedro->tamanhoLote = 5000; 
    $obraPredioDoPedro->altura = 150; 
    $obraPredioDoPedro->largura = 5000;
    $obraPredioDoPedro->mostraDadosObra();
    

