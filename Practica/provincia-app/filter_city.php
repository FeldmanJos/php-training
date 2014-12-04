<?php
require '../bugtracker/bootstrap.php';

if (isset($_GET['prov'])){
    $query1 = $entityManager->createQuery('SELECT p.idProvince FROM province p WHERE p.name = :nameProv');
    $query1->setParameter('nameProv',$_GET['prov']);
    $province = $query1->getResult();
    
    $query2 = $entityManager->createQuery('SELECT c.name FROM city c WHERE c.province = :idProvince');
    $query2->setParameter('idProvince',$province[0]["idProvince"]);
    $city = $query2->getResult();
  
    header('content-type: application/json');
    $result = json_encode($city);
    echo $result;
    exit();
}
?>