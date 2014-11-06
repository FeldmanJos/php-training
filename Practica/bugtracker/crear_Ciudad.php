<?php
require_once 'bootstrap.php';

$newCityName = $argv[1];

$ciudad= new City();
$ciudad->setName($newCiudadName);
$provincia->setName($newProvinceName);

$entityManager->persist($provincia);
$entityManager->flush();
?>