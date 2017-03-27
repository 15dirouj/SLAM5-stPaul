<?php

//require_once __DIR__.'/../vendor/autoload.php';

//$app = new Silex\Application();

//require __DIR__.'/../app/routes.php';

//$app->run();

// Connexion � la base.
include "../connect.php";

// namespace Classe\sejourDAO;

// use Classe\sejourDAO;

// use Classe\sejour;

// Appel des classes
	// News
		include "../Classe/sejour.php";
	// NewsADO
		include "../Classe/sejourDAO.php";

// injections des requ�tes sql dans la base de donn�es.
	include "../src/modele.php";

	$osejourDAO = new sejourDAO($bdd);
	$SejNo = 1;
	$osejour = $osejourDAO->getList($SejNo);
	
// Affichage du site web.
	require "../Vue/vue.php";
?>