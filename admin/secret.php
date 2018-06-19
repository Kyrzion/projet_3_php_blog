
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Administration</title>
        <link href="../public/blog-home.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=apiKey=localhost"></script>
        <script src="tinymce.js"></script>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Billet Simple pour l'Alaska</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Accueil

                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Chapitres</a>
              </li>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="secret.php">Administration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="disconnect.php">Déconnexion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <h2 class="my-4 text-center">Bienvenue sur l'administration
          <small>de votre blog</small>
        </h2>


        <div class="row">

          <!-- Blog Entries Column -->
          <div class="col-md-8">

        <?php
        $toto_hash = password_hash("toto",PASSWORD_BCRYPT);

        if (password_verify($_POST["mot_de_passe"] ,$toto_hash)==true || $_SESSION['connect'] == true)
    {
        $_SESSION['connect'] = true; ?>

        <h2 class="my-4" style="margin-left:5%;">Administration
          <small>- Modifications possibles</small>
        </h2>

          <a class="btn btn-primary card-body" style="margin: 5% 1% 50% 5%;" href="addpost.php"> Ecrire un nouvel article</a>
          <a class="btn btn-success card-body" style="margin: 5% 1% 50% 5%;" href="recap.php"> Modifier un article</a>
          <a class="btn btn-danger card-body" style="margin: 5% 1% 50% 5%;" href="recap.php"> Supprimer un article</a>



        <?php
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>


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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
