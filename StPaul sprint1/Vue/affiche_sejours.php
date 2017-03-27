<?php
foreach ($osejour as $sejour) {
	echo "<h2><p>", $sejour->getSejIntitule(), "</p></h2>", $sejour->getSejMontantMBI(), '€</br>';
	echo "A partir du ", $sejour->getSejDteDeb();
	echo $sejour->getSejDuree().' nuits';
}
?>
