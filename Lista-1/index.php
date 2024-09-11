<?php

class Pessoa {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 0;
    public $diaNas = 0;
    public $mesNas = 0;
    public $anoNas = 0;

    public function informaNome(){
        return "Nome: {$this->nome}";
    }

    public function informaIdade(){
        return "idade: {$this->idade}";
    }

    public function ajustaDataDeNascimento(){
        return "Data de Nascimento: {$this->diaNas}/{$this->mesNas}/{$this->anoNas}";
    }
}

$pessoa1 = new Pessoa;
echo $pessoa1->nome = readline("digite o seu nome: ") . "\n";
echo $pessoa1->idade = readline("digite a sua idade: ") . "\n";
echo $pessoa1->diaNas = readline("digite o dia de seu nascimento: ");
echo $pessoa1->mesNas = readline("digite o mes de seu nascimento: ");
echo $pessoa1->anoNas = readline("digite o ano de seu nascimento: ") . "\n";

echo $pessoa1->informaNome();
echo $pessoa1->informaIdade();
echo $pessoa1->ajustaDataDeNascimento();