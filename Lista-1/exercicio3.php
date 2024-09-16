<?php

class produto {
    public $nomeProduto;
    public $precoProduto;
    public $qtdProduto;
    public $metodoPag;

    public function __construct($nomeProduto, $precoProduto, $qtdProduto, $metodoPag) {
        $this->nomeProduto = $nomeProduto;
        $this->precoProduto = $precoProduto;  
        $this->qtdProduto = $qtdProduto;
        $this->metodoPag = $metodoPag;  
    }

    public function itens() {
        return "Produto: $this->nomeProduto" . "\n" . "Preço: R$$this->precoProduto" . "\n" . "Quantidade: $this->qtdProduto" . "\n" . "Metodo de pagamento: $this->metodoPag" . "\n";
    }
}

echo "--------- PRODUTOS ----------" . "\n";
echo "--------- Cliente 1 ----------" . "\n";
$cliente1 = new produto("açúcar", 10.59, "5kg", "Dinheiro");
echo $cliente1->itens();

echo "--------- Cliente 2 ----------" . "\n";
$cliente2 = new produto("coca-cola", 9.99, "2L", "Cheque");
echo $cliente2->itens();

echo "--------- Cliente 3 ----------" . "\n";
$cliente3 = new produto("arroz", 14.99, "2kg", "Cartão");
echo $cliente3->itens();