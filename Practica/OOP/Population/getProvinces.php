<?php
require_once '../bootstraping.php';
//include_once './Data.php';

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

header('Content-Type: application/json');

$output = array();
$output['status'] = 'ok';

foreach (Province::$provincesList as $key => $province) {
    $output['provinces'][] = utf8_encode($province->getName());
}

echo json_encode($output);
?>
