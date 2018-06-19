<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Billet Simple pour l'Alaska</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil

          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Chapitres</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Connexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h2 class="my-4 ">Billet simple pour l'Alaska
        <small>- Une aventure extraordinaire</small>
      </h2>

  <div class="news card mb-4" style="padding:2%";>
      <h3>
          <?= htmlspecialchars($post['title']) ?>
          <em>le <?= $post['creation_date_fr'] ?></em>
      </h3>
      <div class="text-justify">
        <p>
            <?= htmlspecialchars_decode($post['content']) ?>
        </p>
      </div>
  </div>
    <p><a href="index.php"class="btn btn-primary " > Retour à la page d'accueil</a></p>
  <div class="card mb-4 text-justify" style="width:60%; padding:2%;" >

    <h2 class="text-center text-primary" style="padding:2%";>Commentaires</h2>

  <form class="text-center" action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author"><h5>Auteur</h5></label><br />
        <input type="text" id="author" name="author" />
    </div>
      </br>
    <div>
        <label for="comment"><h5>Commentaire</h5></label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div style="padding:2%";>
        <input type="submit" class="btn btn-primary" />
    </div>
</form>


<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>
</div>



<?php require('template.php'); ?>
