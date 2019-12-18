<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post" action="">
	NOMBRE : <input type="number" name="nombre" min="1">
	<input type="submit" value="Valider">
</form>
<?php
    if (!empty($_POST)) {
	    $nombre = $_POST['nombre'];
	    echo "</br> <a href=\"multiplication.php?nombre=$nombre\">TABLE DE MULTILICATION DE $nombre </a> <br>";
    }
?>
</body>
</html>