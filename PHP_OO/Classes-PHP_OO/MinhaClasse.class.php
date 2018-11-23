<?php
//criando método construtor e desconstrutor
class MinhaClasse {
    public $nome;
    public $sobreNome;
    
    //dessa forma e como percorre os métodos construtor e destrutor, agora criarei uma classe public com o nome de "nome" e irei obrigar a toda vez verificar o nome
    function __construct($nome, $sobreNome) {
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
       // echo 'Construtor Iniciado';
    }
    function __destruct() {
        echo 'Entrei no destrutor';
    }
}
//esse meu novo objeto eu acabo obrigando ele a passar um novo parametro, que no caso é o parametro "nome"
$carlos = new MinhaClasse('Carlos', 'Uchôa');

echo $carlos->nome;
echo $carlos->sobreNome;

//quando eu crio um objeto e quero obrigar a passagem de um parametro eu simplesmente coloco os parametros e passo eles, no caso ddo destrutor eh utilizado para destruir conexao com banco de dados
echo '<hr>';
$rafael = new MinhaClasse('Rafael', 'Da Silva');

echo $rafael->nome;
echo $rafael->sobreNome;

 

