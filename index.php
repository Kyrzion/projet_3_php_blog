
<?php
require('controller/frontend.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'AddPost') {

            if (!empty($_POST['titleform']) && !empty($_POST['contentform'])) {
                AddPost( $_POST['titleform'], $_POST['contentform']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
    }

    elseif ($_GET['action'] == 'delPost'){
        if (isset($_GET['id']) && $_GET['id'] > 0){

          delPost($_GET['id']);}
        else{
          echo 'Erreur : aucun identifiant de billet envoyé. Suppression impossible' ;}
    }

    elseif ($_GET['action'] == 'delComment'){
        if (isset($_GET['id']) && $_GET['id'] > 0){

          delComment($_GET['id']);}
        else{
          echo 'Erreur : aucun identifiant de billet envoyé. Suppression impossible' ;}
    }



    elseif ($_GET['action'] == 'login') {
      login();
    }
    elseif ($_GET['action'] == 'dashboard') {
      dashboard();
    }
    elseif ($_GET['action'] == 'writepost') {
      writepost();
    }
    elseif ($_GET['action'] == 'recap') {
      $page = 0;
      if(array_key_exists('page', $_GET))
      {
        $page = $_GET['page'];
      }
      if
      (!isset($page))
      {
        $page = 0;
      }
      recap($page);

    }
    elseif ($_GET['action'] == 'deletepost') {
      deletepost();
    }

    elseif ($_GET['action'] == 'modifpost') {
      modifpost();
    }

    elseif ($_GET['action'] == 'recapcom') {
      $page = 0;
      if(array_key_exists('page', $_GET))
      {
        $page = $_GET['page'];
      }
      if
      (!isset($page))
      {
        $page = 0;
      }
      recapcom($page);

    }
}
else {
  $page = 0;
  if(array_key_exists('page', $_GET))
  {
    $page = $_GET['page'];
  }
  if
  (!isset($page))
  {
    $page = 0;
  }
    pagination($page);
}
