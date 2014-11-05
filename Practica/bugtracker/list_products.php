<?php
//list_products.php
require_once 'bootstrap.php';
$id = $argv[1];
$productRepository = $entityManager->getRepository('Producto');
$products = $productRepository->findById($id);

if (!empty($products)){
    foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}}else{
    echo 'No se encontro el producto.';
}
?>