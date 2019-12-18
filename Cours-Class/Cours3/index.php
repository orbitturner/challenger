<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="menu">
	<?php
		//include 'menu.php';
	?>
</div>
<div id="gauche">
	<?php
		//require 'gauche.php';
	?>
</div>
<div id="contenu">
	<?php
		//include 'contenu.php';
	?>
</div>
<div id="pied">
	<?php
		//include 'pied.php';
	?>
</div>
 -->
<form method="POST">
	Nombre : <input type="number" name="nb" min="1">
			<input type="submit" value="Valider">	
</form>

<?php
	if (!empty($_POST)) {
		$nb = $_POST['nb'];
		echo "<a href='page2.php?nb=$nb'>Table de Multiplication de $nb</a>";
	}
?>
</body>
</html>