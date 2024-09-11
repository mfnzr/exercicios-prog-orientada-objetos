<?php


    class Universidade {

        public $nome;

        public function informaNome(){
            
            return "O nome da Universidade é {$this->nome}" . "\n";

    }
}

$nomeUniversidade = new Universidade;
echo $nomeUniversidade->nome = readline("Digite o nome da Universidade: ") . "\n";

echo $nomeUniversidade->informaNome();