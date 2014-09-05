<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form  method='GET' action="Factorial.php">
        Numero: <input type="text" name="numero" >
        <input type="submit" value="Calcular">
        </form>
        <?php include('Factorial.php'); ?>
        <?php if(isset($_GET ['numero'])) {
            echo "El factorial es:" . Factorial($_GET ['numero']);}
            ?>
    </body>
</html>