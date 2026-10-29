
<?php

class Produto {
    // Atributos
    public $nome;
    public $preco;

    // Método construtor
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Método para mostrar os dados
    public function mostrarProduto() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . $this->preco . "<br><br>";
    }
}

// Criando dois objetos
$p1 = new Produto("Caderno", 20.00);
$p1->mostrarProduto();

$p2 = new Produto("Caneta", 3.50);
$p2->mostrarProduto();


?>
