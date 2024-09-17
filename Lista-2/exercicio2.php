<?php

class Objeto {
    public $largura;
    public $altura;

    public function __construct($largura, $altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        echo $this->largura * $this->altura; 
    }
}

class Triangulo extends Objeto {
    public $tipo;
    
    public function __construct($largura, $altura, $tipo){
        parent::__construct($largura, $altura);
        $this->tipo = $tipo;
    }

    public function calcularArea() {
        echo "Área: " . $this->largura * $this->altura . "\n"; 
        echo "Tipo: " . $this->tipo . "\n";
    }
}

class Retangulo extends Objeto {

    public function __construct($largura, $altura){
        parent::__construct($largura, $altura);
    }

    public function calcularArea() {
        echo "Área: " . $this->largura * $this->altura . "\n"; 

    }

    public function verificarQuadrado() {
        if ($this->largura === $this->altura) {
            echo "É um quadrado!";
        } else {
            echo "Não é um quadrado!";
        }
    }
}
echo "\n";
echo "---TRIANGULO--- \n";
$triangulo = new Triangulo(5, 3, "escaleno");
$triangulo->calcularArea();

echo "\n";
echo "---RETANGULO--- \n";
$retangulo = new Retangulo(8, 12);
$retangulo->calcularArea();
$retangulo->verificarQuadrado();