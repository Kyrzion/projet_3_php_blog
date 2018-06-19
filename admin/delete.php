<?php
try
 {
  $db = new PDO('mysql:host=localhost;dbname=projet_2;charset=utf8', 'root', '');
 }
catch(Exception $e)
 {
  die('Erreur : '.$e->getMessage());
 }

 $id = $_GET['ID'];

$stmt = $db->prepare('DELETE FROM posts WHERE id=:id');
$stmt->execute(array(':id' => $id));
    ?>


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Administration</title>
        <link href="../public/blog-home.css" rel="stylesheet"/>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                <a class="nav-link" href="../index.php">Accueil
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

            <h2 class="my-4 ">Administration
              <small>- Votre article a bien été supprimé</small>
            </h2>
            <a class="btn btn-secondary"href="recap.php"> Revenir au récapitulatif des articles</a>
          <p></p>
