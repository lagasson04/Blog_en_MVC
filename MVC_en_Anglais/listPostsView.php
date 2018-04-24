<?php $title = 'Mon super blog en MVC'; ?>

<?php ob_start(); ?>
<h1>Bienvenue sur mon blog</h1>
<p>Derniers billets du blog :</p>


<?php
while ($data = $posts->fetch()) 
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
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

