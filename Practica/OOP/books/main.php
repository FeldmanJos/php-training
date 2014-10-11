<?php
require_once '/chapters.php';
require_once '/books.php';

$book1 = new books('El velero de Cristal');
$chap1 = new chapters('el viaje', 'asafsd', 13);
$chap2 = new Chapters('El descenso', 'este es el segundo capitulo', 42);
echo '<strong>'.'Nombre del Libro: '.'</strong>'.$book1->getName().'<br>';
$book1->addChapterList($chap1);
$book1->addChapterList($chap2);
$book1->printIndex();
?>