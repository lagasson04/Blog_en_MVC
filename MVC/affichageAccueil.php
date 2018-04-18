<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon super blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<h1>Bienvenue sur mon blog</h1>
	<p>Derniers billets du blog :</p>

	
	<?php
	while ($donnees = $req->fetch()) 
	{
		?>
		<div class="news">
			<h3>
				<?php echo htmlspecialchars($donnees['titre']); ?>
				<em>le <?php echo $donnees['date_creation_fr']; ?></em>
			</h3>

			<p>
				<?php
// On affiche le contenu du billet
				echo nl2br(htmlspecialchars($donnees['contenu']));
				?>
				<br />
				<em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires billet N° <?php echo $donnees['id']; ?></a></em>
			</p>
		</div>
		<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
</body>
</html>