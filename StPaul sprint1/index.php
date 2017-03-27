<?php

// Connexion à la base.
include "connect.php";

// namespace Classe\sejourDAO;

// use Classe\sejourDAO;

// use Classe\sejour;

// Appel des classes
	// News
		include "Classe/sejour.php";
	// NewsADO
		include "Classe/sejourDAO.php";

// injections des requêtes sql dans la base de données.
	include "Modèle/modele.php";
	
	$osejourDAO = new sejourDAO($bdd);
	$SejNo = 1;
	$osejour = $osejourDAO->getList($SejNo);
	
// Affichage du site web.
	require "Vue/vue.php";
?>