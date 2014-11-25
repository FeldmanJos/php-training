<?php
require '../bugtracker/bootstrap.php';


    $query = $entityManager->createQuery('SELECT c.name INNER JOIN city c, province p');
    $city = $query->getResult();
  
    header('content-type: application/json');
    $result = json_encode($city);
    echo $result;
    exit();

?>