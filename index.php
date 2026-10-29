
<?php
require_once 'Produtos.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $p1 = new Produto($_POST['nome'], $_POST['preco']);
}

if (isset($p1)) {
    $p1->mostrarProduto();
}
?>
