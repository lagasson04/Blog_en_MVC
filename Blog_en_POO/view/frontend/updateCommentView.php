<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon blog</title>
	<link href="public/css/style.css" rel="stylesheet" /> 
</head>
<body>
	<p>Ici, vous pouvez modifier les commentaires :</p>
	<form action="#" method="post">
		<div>
			<label for="author">Auteur</label><br />
			<input type="text" id="author" name="author" value="<?= htmlspecialchars($_GET['auteur']) ?>" disabled="disabled" />
		</div>
		<div>
			<label for="comment">Commentaire</label><br />
			<textarea id="comment" name="comment" ><?= htmlspecialchars($_GET['com']) ?></textarea>
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>
	<p><a href="../../index.php">Retour à l'accueil</a></p>
</body>
</html>


