<?php

require_once '../bootstraping.php';

use Population\Province;
use Population\City;

$Chaco = new Province('Chaco');
$Corrientes = new Province('Corrientes');

$Chaco->setCapital(new City('Resistencia'));
$Chaco->addCity(new City('Castelli'));
$Chaco->addCity(new City('Puerto Tirol'));
$Chaco->addCity(new City('Makalle'));

$Corrientes->setCapital(new City('Corrientes'));
$Corrientes->addCity(new City('Mercedes'));
$Corrientes->addCity(new City('Goya'));
$Corrientes->addCity(new City('Empedrado'));

var_dump(Province::$provincesList);
//$province = Province::getProvince('Corrientes');
//echo $province->getName();

?>
