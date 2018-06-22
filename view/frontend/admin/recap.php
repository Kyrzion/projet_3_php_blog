
<?php

$db = new PDO('mysql:host=localhost;dbname=projet_2;charset=utf8', 'root', '');
if (!isset($_GET['page']) || $_GET['page']=='0') // Si la variable page n'est pas définie ou vaut zéro
{
    $page=1;
}
else
{
    $page=$_GET['page']; // Sinon lecture de la page
}
$zone=10*($page-1);
$req = $db->query('SELECT * FROM posts');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Administration</title>
    <link href="../../../public/blog-home.css" rel="stylesheet"/>
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            <a class="nav-link" href="../../../index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chapitres</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../form.php">Administration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="disconnect.php">Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h4 class="my-4">
          <a class="btn btn-primary" href="addpost.php">Ecrire un nouvel article</a>
        </h4>
        <h2 class="my-4 ">Administration
          <small>- Récapitulatif des articles</small>
        </h2>
        <a class="btn btn-secondary"href="secret.php"> Revenir au panneau d'administration</a>
      <p></p>



      <?php
        $posts = $db->query("SELECT * FROM posts ORDER BY title DESC LIMIT $zone,10");
        while($reponse = $posts->fetch())
      {?>


      <div class="card mb-4" style="margin:1%;padding-left:1%;">
        <?php
          echo'<p >';
          echo htmlspecialchars($reponse['title']);
          echo'<p >';
          echo'<a class="btn btn-success" href="modif.php" style="margin-right:1%;"> Modifier</a>';
          echo'<a class="btn btn-danger" href="delete.php?ID='.$reponse['id'].'"> Supprimer</a>';
        ?>
        <div class="card-footer text-muted">
          Ecrit le <em> <?= $reponse['creation_date'] ?></em>
        </div>


      </div>


        <?php }
        ?>
      </div>

    </div>
    <div class="pagination justify-content-center mb-4">
      <div class="page-item">
        <?php
            $nb_articles=$req->rowCount(); // Connaitre le nombre de resultats
            $nb_pages=ceil($nb_articles/5); // Divisé par le nombre de pages
            echo  'Page : ';
            for($i=1; $i<$nb_pages+1; $i++)
            {
                ?>
                    <a class="btn btn-primary" href="recap.php?page=<?php echo $i ?>"> <?php echo $i ?></a>
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
      <script src="../jquery.min.js"></script>
      <script src="../bootstrap.bundle.min.js"></script>
    </body>
  </html>
