<?php

class Cadastros {
    public $nomePessoa;
    public $endereco;
    public $email;
    public $telefone;

    public function __construct($nomePessoa, $endereco, $email, $telefone){
        $this->nomePessoa = $nomePessoa;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone; 
    }

}

class Livros {
    public $nomeLivro;
    public $autor;
    public $nPaginas;
    public $disponibilidade;
    public $alugado = null;

    public function __construct($nomeLivro, $autor, $nPaginas, $disponibilidade){
        $this->nomeLivro = $nomeLivro;
        $this->autor = $autor;
        $this->nPaginas = $nPaginas;
        $this->disponibilidade = $disponibilidade; 
        $this->alugado = null; 
    }
    public function Alugar(Cadastros $cadastros) {
        if ($this->disponibilidade == "Disponível") {
            $this->alugado = $cadastros;
            echo "Livro $this->nomeLivro alugado com sucesso por $cadastros->nomePessoa\n";
    } else if ($this->disponibilidade == "Não disponível") {
        echo "Livro $this->nomeLivro ja está alugado! por $cadastros->nomePessoa\n";
    }
}

public function devolver() {
    if ($this->disponibilidade == "Não disponivel") {
        $nomepessoa = $this->alugado ? $this->alugado->nomePessoa : "Desconhecido";
        echo "Livro {$this->nomeLivro} foi devolvido! \n";
        $this->disponibilidade = "Disponivel";
        unset($this->alugado); 
    } else {
        echo "Livro {$this->nomeLivro} já está disponível. \n";
}
}
}

$cadastro1 = new Cadastros("Alana Machado", "Rua Vicente Machado, 23", "alanamachado@gmail.com", "4298123456");
$cadastro2 = new Cadastros("José Martins", "Rua Guarapuava, 453", "josezinho@gmail.com", "4298321654");

$livro1 = new Livros("O Hobbit", "John Ronald Ruel Tolkien", 328, "Disponível");
$livro2 = new Livros("Entendendo Algorítmos", "Aditya Y. Bhargava", 263, "Alugado");

$livro1->alugar($cadastro1);
$livro2->alugar($cadastro2);

$livro1->devolver();
$livro2->devolver();