<?php

class Obra {
    public $nomeObra;
        public $tamanhoLote;
        public $altura;
        public $largura;

        //vou criar um metodo para definir essa altura
        function aumentaAltura($altura){
            $this->altura += $altura;
        }

        //agora vou criar um  metodo para aumentar largura da casa

        function aumentaLargura($largura){
            $this->largura += $largura;
        }

    function mostraDadosObra(){
        echo "Nome: {$this->nomeObra}<br> Tamanho do Lote: {$this->tamanhoLote}<br> Altura:{$this->altura}<br> Largura:{$this->largura}<br>";
        }
}
