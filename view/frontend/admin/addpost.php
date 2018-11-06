

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
                <a class="nav-link" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=listChapters">Chapitres</a>
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
        <div class="row">
          <div class="col-md-8">
            <h2 class="my-4 ">Billet simple pour l'Alaska
              <small>- Une aventure extraordinaire</small>
            </h2>
            <a class="btn btn-secondary" href="./index.php?action=dashboard"> Revenir au panneau d'administration</a>
            <p></p>
            <h4><strong>Ecrire un nouvel article</strong></h4>
              <form action="./index.php?action=AddPost" method="POST">
                  <label for="title">Titre: </label>
                  <input type="text" class="form-control" name="titleform" /></br>
                  <label for="title">Corps de l'article: </label>
                  <textarea type="text" class="form-control" rows="5" name="contentform" ></textarea></br>
                  <input type="submit" class="addpost_button_submit btn btn-primary" value="Envoyer" />
              </form>
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
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

          <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=apiKey=localhost"></script>
          <script src="view/frontend/admin/tinymce.js"></script>

      </body>
</html>
