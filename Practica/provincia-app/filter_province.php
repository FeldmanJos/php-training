<?php
require '../bugtracker/bootstrap.php';

if (isset($_GET['data'])){
    $query = $entityManager->createQuery('SELECT p.name FROM province p WHERE p.name LIKE :name');
    $query->setParameter('name',$_GET['data'].'%');
    $province = $query->getResult();
    
    header('content-type: application/json');
    $result = json_encode($province);
    echo $result;
    exit();
}
?>