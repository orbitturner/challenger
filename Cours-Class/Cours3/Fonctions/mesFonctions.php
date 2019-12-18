<?php
	function converEuroCfa($euro){
		$cfa = $euro * 655.42334;
		return $cfa;
	}

	function converDollarCfa($dollar,$change){
		$cfa = $dollar * $change;
		echo "<br> $dollar (dollars) = $cfa FCFA";
	}
?>