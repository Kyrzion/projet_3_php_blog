<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Administration</title>
        <link href="public/blog-home.css" rel="stylesheet"/>
        <link href="public/styles.css" rel="stylesheet"/>
        <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=apiKey=localhost"></script>
        <script src="tinymce.js"></script>
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

                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Chapitres</a>
              </li>
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
        <h2 class="my-4 text-center">Bienvenue sur l'administration de votre blog </h2>


        <div class="row">

          <!-- Blog Entries Column -->
          <div class="col-md-8">
        <h2 class=" title_admin my-4">Administration
          <small>- Modifications possibles</small>
        </h2>

          <a class=" btn btn-primary card-body"  href="./index.php?action=writepost"> Ecrire un nouvel article</a>
          <a class=" btn btn-success card-body"  href="./index.php?action=summary"> Modifier un article</a>
          <a class=" btn btn-danger card-body"  href="./index.php?action=summary"> Supprimer un article</a>

            <h2 class=" title_admin my-4 ">
              <small>- Modifications commentaires</small>
            </h2>

            <a class=" btn btn-warning card-body"  href="./index.php?action=summarycom"> Modérer les commentaires</a>
              

      </div>
    </div>
  </div>
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
