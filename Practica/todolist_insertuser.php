<?php

function Tasks($name, $lastname) {
    
$mysqli = mysqli_connect("localhost", "root", "admin", "todolist");
$res = mysqli_query($mysqli, "INSERT INTO users (name, lastname) VALUES ('$name', '$lastname')");
if (!$res){
    echo myslqli_error ($res);
}
}
Tasks('Lucio', 'Gabardini');

?>