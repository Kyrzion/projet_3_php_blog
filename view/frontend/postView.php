<?php $title = htmlspecialchars($post->title()) ?>

<?php ob_start(); ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="./index.php">Billet Simple pour l'Alaska</a>
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
          <a class="nav-link" href="index.php?action=listChapters">Chapitres</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=login">Connexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

  <div class="row">


          <div class="col-md-8">

            <h2 class="my-4 ">Billet simple pour l'Alaska
              <small>- Une aventure extraordinaire</small>
            </h2>

        <div class="news card mb-4">
          <div class="postbox">
            <h3>
                <?= htmlspecialchars($post->title()) ?>
                <em>le <?= $post->creationDate() ?></em>
            </h3>
            <div class="text-justify">
              <p>
                  <?= htmlspecialchars_decode($post->content()) ?>
              </p>
            </div>
          </div>
        </div>
          <p><a href="index.php"class="btn btn-primary " > Retour à la page d'accueil</a></p>

              <div class="card mb-4 text-justify" style="width:60%; padding:2%;">


                <h2 class="news text-center text-primary">Commentaires</h2>

              <form class="text-center" action="index.php?action=addComment&amp;id=<?= $post->id() ?>" method="post">
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
            foreach($comments as $reponse)
            {?>
                <p><strong><?= htmlspecialchars($reponse->author());?></strong> le <?= $reponse->CommentDate_fr();?> &nbsp; &nbsp; &nbsp; <?php echo '<a class="btn btn-danger" href="./index.php?action=reportcom&amp;id='.$reponse->id().'&amp;postID='.$post->id().'">Signaler</a>'?></p>
                <p><?= nl2br(htmlspecialchars($reponse->comment()))?></p>
            <?php
            }
            ?>
        </div>

    </div>
  </div>
</div>

<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; BERTET Théo - 2018</p>
  </div>

</footer>

<!-- Bootstrap core JavaScript -->
<script src="public/vendor/jquery/jquery.min.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
