<?php
require '../bugtracker/bootstrap.php';

if (isset($_GET['data'])){
    $query = $entityManager->createQuery('SELECT p.name FROM province p WHERE p.name LIKE :name');
    $query->setParameter('name',$_GET['data'].'%');
    $province = $query->getResult();
    var_dump($province);
}
?>