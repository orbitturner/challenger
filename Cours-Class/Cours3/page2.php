<?php
	$nombre = $_GET['nb'];

	for ($i=1; $i <12 ; $i++) { 
		echo "$nombre x $i = ".$nombre*$i."<br>";
	}
?>