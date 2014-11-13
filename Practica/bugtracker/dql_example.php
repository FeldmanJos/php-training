<?php
require 'bootstrap.php';
$query = $entityManager->createQuery('SELECT p.name FROM Province p');
$names = $query->getResult(); // array of Province name's
foreach ($names as $name){
    echo "Provincia: ".$name['name']."\n";
}
exit();

$query = $entityManager->createQuery('SELECT DISTINCT p.id FROM City c JOIN c.province p');
$ids = $query->getResult(); // array of Province ids

$query = $entityManager->createQuery('SELECT c FROM City c WHERE c.id = ?1');
$query->setParameter(1, 3);
$citites = $query->getResult(); // City objects

$query = $entityManager->createQuery('SELECT p FROM Province p WHERE p.name = :name');
$query->setParameter('name', 'Chaco'); //query->setParameter(array("name" => "Chaco"));
$provinces = $query->getResult(); // array of Province objects
//Partial object

$query = $entityManager->createQuery('SELECT partial p.{id, name} FROM Province p');
$provinces = $query->getResult(); // array of partially loaded CmsUser objects

?>