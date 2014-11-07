<?php

require_once 'bootstrap.php';

array_shift($argv);
$provinceName = array_shift($argv);
$provinceRepository = $entityManager->getRepository('Province');
$province = $provinceRepository->findOneBy(Array('name' => $provinceName));

if (is_null($province)) {
    $newProvince = new Province();
    $newProvince->setName($provinceName);
}

$cityRepository = $entityManager->getRepository('City');
$cont = 0;
foreach ($argv as $cityName) {
    $city = $cityRepository->findOneBy(Array('name' => $cityName));
    if (is_null($city)) {
        $newCity = new City();
        $newCity->setName($cityName);
        $newCity->setProvince($province);
        $province->getCities()->add($newCity);
        $entityManager->persist($newCity);
        $cont+=1;
    }
}
//La funcion reemplaza cada %s que encuentra, con los parametros que le paso
echo sprintf("El id de la provincia es %s. Y la cantidad de ciudades agregadas es %s\n", $province->getIdProvince(), $cont);
$entityManager->flush();
?>