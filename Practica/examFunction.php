<?php
//La funcion calcula la cantidad de minutos de diferencia que tienen la fecha y hora actual 
//y la fecha y hora ingresada como parametro

/**
* @param $date an String  that represent a date, format: M/D/YYYY HH:ii
*/
function guess($date)
{
 
  // date_create() crea un nuevo objeto DateTime
  $today = date_create('now');
  $date1 = date_create($date);
  $today = date_timestamp_get($today); //$today to seconds
  $date1 = date_timestamp_get($date1); // $date1 to seconds
  $interval = ($today - $date1) / 60;
  return $interval;
}
//usage
 echo guess('10/09/2014 20:30');

?>
