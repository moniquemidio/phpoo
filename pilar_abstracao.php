<?php

class Funcionario {

    // atributos
    public $nome='Monique';
    public $telefone='43 90000-0000';
    public $numFilhos=0;

    //funções e métodos
    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }
}

$y= new Funcionario();
//echo $y->modificarNumFilhos() . '<br/>';
$y->modificarNumFilhos(3);

echo $y->resumirCardFunc();
?>