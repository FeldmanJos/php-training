<?php
require_once '/app.php';
require_once '/tablet.php';

$app1 = new App('POU', 10);
$app2 = new App('POUCITA', 12);
$app3= new App('Loco',25);
$tab = new Tablet();
$tab->installApp($app1);
$tab->runApp($app1, 1);
$tab->installApp($app2);
//$tab->installApp($app3); //En esta linea se ejecuta un nuevo mensaje, notificando que ya se cargaron 2 app.
//$tab->runApp($app2,2); //Ejecutando esta linea, se muestra un mensaje de error 'cerrar app'
//$tab->getBatteryStatus(); //Aqui muestra el porcentaje que resta de la bateria
?>