<?php
function factorial($numero) {
   $x = 1;
       for ( $i = 1; $i <= $numero; $i++) {
           $x = $x * $i;
       }
    return $x;
   
}
?>