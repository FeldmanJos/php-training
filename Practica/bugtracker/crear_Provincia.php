<?php
require_once 'bootstrap.php';

$newProvinceName = $argv[1];
$newCityName = $argv[2];

$provincia= new Province();
$provincia->setName($newProvinceName);

$city= new City();
$city->setName($newCityName);

$provincia->getCities()->add($city);
$city->setProvince($provincia);

$entityManager->persist($provincia);
$entityManager->persist($city);
$entityManager->flush();
?>