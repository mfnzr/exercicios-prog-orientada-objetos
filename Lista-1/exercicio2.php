<?php
    class Pessoa {

        public $nomePessoa;
        public $funcao;

        function __construct($nomePessoa, $funcao) {
        $this->nomePessoa = $nomePessoa;
        $this->funcao = $funcao;             
        }

    }

    class Universidade extends Pessoa {
        public $nomeUni;

        public function chamarNomes($nomeUni) {
           return $this->nomeUni = $nomeUni;
        }
    }

    $pessoa1 = new Universidade("Ana", "Professora");
    $pessoa1->chamarNomes("Campo Real");
    echo "Universidade: " . $pessoa1->nomeUni . "\n";
    echo "{$pessoa1->nomePessoa} - Função: {$pessoa1->funcao}\n";



    $pessoa2 = new Universidade("Maria", "Diretora");
    $pessoa2->chamarNomes("UTFPR");
    echo "Universidade: " . $pessoa2->nomeUni . "\n";
    echo "{$pessoa2->nomePessoa} - Função: {$pessoa2->funcao}\n";
    
