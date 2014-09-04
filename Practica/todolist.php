<?php

$mysqli = mysqli_connect("localhost", "root", "admin", "todolist");
$res = mysqli_query($mysqli, "SELECT * FROM users");
$row = mysqli_fetch_assoc($res);

while ($row !== NULL) {
echo '<pre>'.var_dump($row).'</pre>';
echo "\n";
$row = mysqli_fetch_assoc($res);
}


?>