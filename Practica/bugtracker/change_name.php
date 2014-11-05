<?php
//list_products.php
require_once 'bootstrap.php';
$id = $argv[1];
$newProductName = $argv[2];
$productRepository = $entityManager->getRepository('Producto');
$products = $productRepository->findById($id);

if (!empty($products)){
    foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
    $product->setName($newProductName);
    $entityManager->persist($product);
    $entityManager->flush();
}}else{
    echo 'No se encontro el producto.';
}

?>