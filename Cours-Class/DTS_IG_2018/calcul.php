<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post">
	Nombre 1 : <input type="number" name="nb1">
	Nombre 2 : <input type="number" name="nb2">
	<input type="submit" name="op" value="+">
	<input type="submit" name="op" value="-">
	<input type="submit" name="op" value="x">
	<input type="submit" name="op" value="/">
</form>
<?php
	
	$op = $_POST['op'];
	$nombre1 = $_POST['nb1'];
	$nombre2 = $_POST['nb2'];
	switch ($op) {
		case '+':
			$res = $nombre1 + $nombre2;
			break;
		case '-':
			$res = $nombre1 - $nombre2;
			
			break;
		case 'x':
			$res = $nombre1 * $nombre2;
			# code...
			break;
		case '/':
			if ($nombre2 != 0) {
			$res = $nombre1 / $nombre2;	
			} else{
				echo "Impossible de diviser par 0 <br>";
			}
			break;
		default:
			# code...
			break;
	}
	echo "<br>Résultat : <input type='text' disabled value = $res>";
	var_dump($_POST);
?>
</body>
</html>