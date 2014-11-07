<?php
require_once 'bootstrap.php';

$newCityName = $argv[1];

$city= new City();
$city->setName($newCityNameName);
$province->setName($newProvinceName);

$entityManager->persist($province);
$entityManager->flush();
?>