
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>


<!DOCTYPE html>
<html>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Billet Simple pour l'Alaska</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          </span><a class="nav-link" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
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




      <!-- Blog Post -->
	  <?php


		  while($reponse = $posts->fetch())
          {?>
          <div class="card mb-4">
            <img class="card-img-top" src="public/img/alaska1.jpg" alt="Card image cap">
          <div class="card-body">
          <?php
            echo'<h2 class="card-title text-primary">';
            echo $reponse['title'];
            echo'</h2>';

          if (strlen($reponse['content']) > 250) {
            $textmini = substr($reponse['content'], 0, 250). '...';
          } else {
            $textmini = $reponse['content'];
          }

          $textform = str_replace("\r", "<br>",$textmini);

          echo'<p class="card-text text-justify">';
          echo $textform;
          echo'</p>';

            ?>
			         <a href="index.php?action=post&amp;id=<?= $reponse['id'] ?>" class="btn btn-primary">Lire la suite &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Ecrit le <em> <?= $reponse['creation_date_fr'] ?></em>
            <p> par Jean Forteroche</p>
          </div>
        </div>
		  <?php }

		  ?>


        <div class="pagination justify-content-center mb-4">
          <div class="page-item">
            <?php
                $nb_articles=15; // Connaitre le nombre de resultats
                $nb_pages=ceil($nb_articles/5); // Divisé par le nombre de pages
                echo  'Page : ';
                for($i=1; $i<$nb_pages+1; $i++)
                {
                    ?>
                        <a class="btn btn-primary" href="index.php?page=<?php echo $i-1 ?>"> <?php echo $i ?></a>
                    <?php
                }
            ?>
          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Mot de l'écrivain</h5>
          <div class="card-body text-justify">
            Je suis Jean Forteroche, acteur et écrivain. Voici mon nouveau roman, "Billet simple pour l'Alaska". J'ai souhaité innover un peu et publier ce roman par épisode en ligne sur mon propre blog.
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; BERTET Théo - 2018</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


<?php
/*$posts->closeCursor();*/

?>
