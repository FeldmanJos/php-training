<?php

function Tasks($user_id, $name, $estimated_time, $status) {
    
$mysqli = mysqli_connect("localhost", "root", "admin", "todolist");
$res = mysqli_query($mysqli, "INSERT INTO tasks (user_id, name, estimated_time, status) VALUES ($user_id, '$name', $estimated_time, $status)");
if (!$res){
    echo myslqli_error ($res);
}
}
Tasks(2, 'Diseñar', 3, 1);

?>