<?php
 $nombr = $_GET['nombre'];
    for ($i=1; $i <= 12 ; $i++) { 
        echo $nombr.' * '.$i.' = '.$nombr*$i.'<br>';
    }

?>