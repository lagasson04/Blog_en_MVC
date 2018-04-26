<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
	<h3>
		<?= htmlspecialchars($post['title']) ?>
		<em>le <?= $post['creation_date_fr'] ?></em>
	</h3>

	<p>
		<?= nl2br(htmlspecialchars($post['content'])) ?>
	</p>
</div>

<h2>Commentaires</h2>

<?php foreach ($comments as $comment): ?>

	<p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?><a href="view/frontend/updateCommentView.php?auteur=<?= $comment['author'] ?>&amp;com=<?= $comment['comment'] ?>"> (modifier)</a></p>
	<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
	
<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

<h2>Ajout de commentaires : </h2>

<form action="index.php?action=addComment&amp;id=<?=$post['id'] ?>" method="post">
	<div>
		<label for="author">Auteur</label><br />
		<input type="text" id="author" name="author" required="required" />
	</div>
	<div>
		<label for="comment">Commentaire</label><br />
		<textarea id="comment" name="comment" required="required"></textarea>
	</div>
	<div>
		<input type="submit" />
	</div>
</form>
