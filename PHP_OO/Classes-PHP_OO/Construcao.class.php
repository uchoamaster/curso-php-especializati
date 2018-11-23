<?php
/**
 * Description of Construcao
 *
 * @author Uchoa
 */

//é uma boa pratica colocar o nome da classe com o mesmo nome do arquivode salvamento
class Construcao {
    //criando um atributo desta classe, caracteristicas da classe
    //cada classe pode possuir atributos e métodos, atributos são as caracteristicas de da classe e os métodos são as ações de cada classe.
    public $nomeDoResponsavel;
    public $tijolos;
    public $cimento;
    public $tamanhoLote;
    //aqui criamos uma função que se torna um método para agilizar toda mudança em um atributo de uma classe, evita eu fazer manualmente.
    //dessa maneira que vimos no exemplo atual, ainda nao fica bacana, por que se tivermos que alterar algo, teremos de mudar mt coisa no codigo, para isso podemos criar varios métodos e funçoes para agilizar nossas vidas 
    //quando estou detro de minha propria classe eu posso utilizar a palavra this-> em vez de setar $casaDoJoao-> "this" isso representa "este atributo desta classe"
   function mostraDadosConstrucao(){
       echo    "A casa do {$this->nomeDoResponsavel} terá, cimentos: {$this->cimento}, e terá {$this->tijolos} tijolos. E o tamanho do lote é:{$this->tamanhoLote} <br>";
   }
}
// os parenteses são opcionais, muitos devs não colocam, mas por boas praticas é recomendado
///aqui criamos o objeto da classe, e atribuimos os produtos
/* ########################################################################################################################################

SEMPRE QUE FOR TRABALHAR COM VARIAVEIS USAR ASPAS DUPLAS E SEMPRE QUE FOR TRABALHAR COM STRINGS E DADOS COMUNS USAR ASPAS SIMPLES!!!


###########################################################################################################################################
*/

//em codigos de programadores pode-se encontrar a classe sem (); pode fazer mas não é recomendado, por questões de boas práticas de desenvolvimento.
//como o exemplo abaixo poderia ficar numa boa assim tb = $casaDoJoao = new Construcao;
//tb é chamado de instancia da classe ou simplesmente de objeto da classe
//atraves do operador new eu criei um novo objeto da classe construção e armazenei numa variavel chamada joao, então joao eh um objeto ou instancia da classe construção, e depois setei as caracteristicas do objeto.
//e no final eu invoquei um método que tem ação de mostrar para mim todos os dados da classe que criei anteriormente com seus atributos e tudo que tem direito.
$casaDoJoao =  new Construcao();
$casaDoJoao->nomeDoResponsavel = 'João';
$casaDoJoao->cimento = 20;// aqui sao os atributos da classe
$casaDoJoao->tijolos = 5000;//aqui tb são atributos da classe 
$casaDoJoao->tamanhoLote = 1500;
$casaDoJoao->mostraDadosConstrucao();


        // aqui eh pra mostrar os atributos na tela do usuario
        //      // echo    "A casa do {$this->$nomeDoResponsavel} terá, cimentos: {$casaDoJoao->cimento}, e terá {$casaDoJoao->tijolos} tijolos. E o tamanho do lote é:{$casaDoJoao->tamanhoLote} <br>";

     // echo    "A casa do {$this->$nomeDoResponsavel} terá, cimentos: {$this->cimento}, e terá {$this->tijolos} tijolos. E o tamanho do lote é:{$this->tamanhoLote} <br>";
//a qui estamos criando outro objeto no caso a casa do pedro que vai receber uma nova construção
$casaDoPedro = new Construcao();
$casaDoPedro->nomeDoResponsavel = 'Pedro';//atributos da casa do pedro
$casaDoPedro->cimento = 25;//aqui tb atributos da classe
$casaDoPedro->tijolos = 7500;//aqui tb atributos da classe
$casaDoPedro->tamanhoLote = 3500; //aqui tb atributo da classe
$casaDoPedro->mostraDadosConstrucao();

