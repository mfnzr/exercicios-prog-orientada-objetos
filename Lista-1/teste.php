<?php

    class Pessoas_Cadastradas {
        public $nome;
        public $endereco;
        public $email;
        public $telefone;

        public function __construct($nome, $endereco, $email, $telefone) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    }

    class Livros_Em_Estoque {
        public $nome_livro;
        public $autor;
        public $numero_paginas;
        public $disponibilidade_aluguel;
        public $pessoa_pegou_livro = null;

        public function __construct($nome_livro, $autor, $numero_paginas, $disponibilidade_aluguel) {
            $this->nome_livro = $nome_livro;
            $this->autor = $autor;
            $this->numero_paginas = $numero_paginas;
            $this->disponibilidade_aluguel = $disponibilidade_aluguel;
            $this->pessoa_pegou_livro = null;
    }

        public function Alugar(Pessoas_Cadastradas $Pessoas_Cadastradas) {
            if ($this->disponibilidade_aluguel == "Disponivel") {
                $this->pessoa_pegou_livro = $Pessoas_Cadastradas;
                echo "O livro $this->nome_livro foi alugado com sucesso! Por $Pessoas_Cadastradas->nome \n";
        } else if ($this->disponibilidade_aluguel == "Não disponivel") {
            echo "O livro $this->nome_livro ja está alugado! por $Pessoas_Cadastradas->nome";
        }
    }

        public function devolver() {
            if ($this->disponibilidade_aluguel == "Não disponivel") {
                $pessoa_nome = $this->pessoa_pegou_livro ? $this->pessoa_pegou_livro->nome : "Desconhecido";
                echo "O livro {$this->nome_livro} foi devolvido por {$pessoa_nome}.\n";
                $this->disponibilidade_aluguel = "Disponivel";
                unset($this->pessoa_pegou_livro); // Remove a referência à pessoa que alugou
            } else {
                echo " \n O livro {$this->nome_livro} já está disponível.\n";
    }
        }
    
}

    $pessoa1 = new Pessoas_Cadastradas("Richard hector", "Rua das dores, 2", "Richard12@exemplo.com", "4298098317");
    $pessoa2 = new Pessoas_Cadastradas("Amanda da silva", "Rua das curas, 2", "amandinhatutu@exemplo.com", "4298098317");

    $livro1 =  new Livros_Em_Estoque("A cinco passos de voçê", "Rachael Lippincott", 288, "Disponivel" );
    $livro2 = new Livros_Em_Estoque("A culpa é das estrelas", "John Green", 288, "Não disponivel");

    $livro1->alugar($pessoa1);
    $livro2->alugar($pessoa2);

    $livro1->devolver();
    $livro2->devolver();