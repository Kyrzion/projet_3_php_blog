<?php
try
 {
  $db = new PDO('mysql:host=localhost;dbname=projet_2;charset=utf8', 'root', '');
 }
catch(Exception $e)
 {
  die('Erreur : '.$e->getMessage());
 }

function InsertPost($secutitle,$secucontent)
{
  $req = $db->prepare('INSERT INTO posts(title,content,creation_date) VALUES( :title2, :content2,now())');
  $req->execute(array(
    'title2' => $secutitle,
   'content2' => $secucontent));
}
elseif ($_GET['action'] == 'Addpost') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        if (!empty($_POST['titleform']) && !empty($_POST['contentform'])) {
            Addpost($_GET['id'], $_POST['title'], $_POST['content']);
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
    }
    else {
        echo 'Erreur : aucun ID de billet envoyé';
    }
}
