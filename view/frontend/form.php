
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
        <link href="./public/blog-home.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="./public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
      <p>Veuillez entrer le mot de passe pour accéder au panneau d'administration du blog:</p>

        <form action="./index.php?action=dashboard" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée à l'administrateur du blog.</p>

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


    </body>
</html>
