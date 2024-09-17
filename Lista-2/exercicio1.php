<?php

//Crie um programa que implemente uma classe Funcionário que contenha os atributos id, nome e cargo e o método calculaSalario, em seguida crie uma classe Gerente que contenha os atributos cargo e quantidadeDeColaboradores. Além disso, o gerente recebe um salário diferente, então utilizando polimorfismo implemente um método calculaSalario para o gerente também.

class Funcionario {
    public $id;
    public $nome;
    public $cargo;

    public function __construct($id, $nome, $cargo){
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function calculaSalario() {
        $salario = 2500;
        echo " - Nome do funcionário: {$this->nome}; \n - Cargo: {$this->cargo}; \n - Salário: R$$ {$salario}. \n";
    }
}

class Gerente extends Funcionario {
    public $cargo;
    public $quantidadeDeColaboradores;

    public function __construct($id, $nome, $cargo, $quantidadeDeColaboradores){
        parent::__construct($id, $nome, $cargo);
       $this->quantidadeDeColaboradores = $quantidadeDeColaboradores;
       $this->cargo = $cargo; 
    }

    public function calculaSalario()
    {
        $salario = 5500;
        echo " - Nome do Gerente: {$this->nome}; \n - Cargo: {$this->cargo}; \n - Salário: R$$ {$salario}. \n - Quantidade de Colaboradores: {$this->quantidadeDeColaboradores}. \n";    
    }
}

echo "---------Funcionarios ---------\n";
$funcionario1 = new Funcionario("F1", "Alana", "programadora");
$funcionario1->calculaSalario();
echo "\n";
$funcionario2 = new Funcionario("F2", "Joel", "Designer");
$funcionario2->calculaSalario();

echo "---------Gerentes---------\n";
$gerente1 = new Gerente("G1", "Gabrielly", "Gerente de negócios", 3);
$gerente1->calculaSalario();
echo "\n";
$gerente2 = new Gerente("G2", "Jhonatan", "Gerente de vendas", 10);
$gerente2->calculaSalario();
