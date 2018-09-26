

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
          <a class="nav-link" href="#">Chapitres</a>
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

          <!-- Blog Entries Column -->
          <div class="col-md-8">

            <h2 class="my-4 ">Billet simple pour l'Alaska
              <small>- Une aventure extraordinaire</small>
            </h2>

        <div class="news card mb-4">
          <h2> Liste des chapitres: </h2>
          <?php

      		  foreach($posts as $reply){?>
                <a href="index.php?action=post&amp;id=<?= $reply->id() ?>" class="btn btn-primary"> <?= $reply->title() ?></a>
              <?php}?>
          </div>
          <p><a href="index.php"class="btn btn-primary " > Retour à la page d'accueil</a></p>



    </div>
  </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
