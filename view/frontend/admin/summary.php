<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Administration</title>
    <link href="public/blog-home.css" rel="stylesheet"/>
    <link href="public/styles.css" rel="stylesheet"/>
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
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
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=listChapters">Chapitres</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./index.php?action=dashboard">Administration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php?action=disconnect">Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h4 class="my-4">
          <a class="btn btn-primary" href="./index.php?action=writepost">Ecrire un nouvel article</a>
        </h4>
        <h2 class="my-4 ">Administration
          <small>- Récapitulatif des articles</small>
        </h2>
        <a class="btn btn-secondary"href="./index.php?action=dashboard"> Revenir au panneau d'administration</a>
      <p></p>

      <?php
        foreach($posts as $reply)
      {?>
      <div class="card mb-4">
        <div class="recap_list">
        <?php
          echo'<p >';
          echo '<h5>'.$reply->title().'</h5>';
          echo'<p >';
          echo'<a class="recap_list_button_modif btn btn-success" href="./index.php?action=modifpost&id='.$reply->id().'"> Modifier</a>';
          echo'<a class="btn btn-danger" href="./index.php?action=delPost&id='.$reply->id().'"> Supprimer</a>';
        ?>
      </div>
        <div class="card-footer text-muted">
          Ecrit le <em> <?= $reply->creationDate(); ?></em>
        </div>
      </div>
        <?php }
        ?>
      </div>
    </div>
    <div class="pagination justify-content-center mb-4">
      <div class="page-item">
        <?php
            $nb_articles=15; // Connaitre le nombre de resultats
            $nb_pages=ceil($nb_articles/10); // Divisé par le nombre de pages
            echo  'Page : ';
            for($i=1; $i<$nb_pages+1; $i++)
            {
                ?>
                    <a class="btn btn-primary" href="./index.php?action=summary&page=<?php echo $i-1 ?>"> <?php echo $i ?></a>
                <?php
            }
        ?>
      </div>
    </div>
  </div>
  <!-- /.row -->
  </div>
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
