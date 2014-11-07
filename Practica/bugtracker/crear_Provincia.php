<?php
require_once 'bootstrap.php';

$newProvinceName = $argv[1];
$newCityName = $argv[2];

$province= new Province();
$province->setName($newProvinceName);

$city= new City();
$city->setName($newCityName);

$province->getCities()->add($city);
$city->setProvince($province);

$entityManager->persist($province);
$entityManager->persist($city);
$entityManager->flush();
?>