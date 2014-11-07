<?php
//list_products.php
require_once 'bootstrap.php';

$productRepository = $entityManager->getRepository('Province');
$provinces = $productRepository->findOneBy(Array('name' => $argv[1]));

if (!empty($provinces)){
    foreach ($provinces as $province) {
    echo sprintf("%s", $province->getName());
}}else{
    echo 'No se encontro la provincia.';
}
?>