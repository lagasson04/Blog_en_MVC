<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon super blog en MVC</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Bienvenue sur mon blog</h1>
	<p>Derniers billets du blog :</p>

	
	<?php
	while ($data = $req->fetch()) 
	{
	?>
		<div class="news">
			<h3>
				<?= htmlspecialchars($data['title']) ?>
				<em>le <?= $data['creation_date_fr'] ?></em>
			</h3>

			<p>
				<?php
				echo nl2br(htmlspecialchars($data['content']));
				?>
				<br />
				<em><a href="post.php?id=<?=$data['id'] ?>">Commentaires</a></em>
			</p>
		</div>
	<?php
	}
	$req->closeCursor();
	?>
</body>
</html>
