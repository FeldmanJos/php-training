<?php
require_once '../bootstraping.php';

include_once './Data.php';

//use Population\Province;
//use Population\City;
//
//$Chaco = new Province('Chaco');
//$Corrientes = new Province('Corrientes');
//
//$Chaco->setCapital(new City('Resistencia'));
//$Chaco->addCity(new City('Castelli'));
//$Chaco->addCity(new City('Puerto Tirol'));
//$Chaco->addCity(new City('Makalle'));
//
//$Corrientes->setCapital(new City('Corrientes'));
//$Corrientes->addCity(new City('Mercedes'));
//$Corrientes->addCity(new City('Goya'));
//$Corrientes->addCity(new City('Empedrado'));

header('Content-Type: application/json');

$province = (isset($_GET['provinceName'])) ? Province::getProvince($_GET['provinceName']) : null;

if (!is_null($province)) {
    $output = array();
    $output['status'] = 'ok';
    foreach ($province->getCities() as $key => $city) {
        $output['cities'][] = utf8_encode($city->getName());
    }
    echo json_encode($output);
} else {
    echo json_encode(array('status' => 'error','message' => 'No se encontro ninguna provincia.'));
}
?>
