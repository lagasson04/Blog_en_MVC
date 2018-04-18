<?php
function getBillets()
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;chartset=utf8', 'root', '');
	}
	catch(Exeption $e)
	{
		die('Erreur : '.$e->getMessag());
	}

	$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh %imin %ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');
	
	return $req;
}
?>
<!--Création de la fonction qui renvoie la liste des billets-->
