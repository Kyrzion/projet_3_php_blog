<?php session_start();?>
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
          $error='Erreur : tous les champs ne sont pas remplis !';
          echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!ctype_space($_POST['author']) && !ctype_space($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
              $error='Erreur : tous les champs ne sont pas remplis !';
              echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
              echo" <script>window.location='index.php';</script>";

            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyébbb';
        }
    }


    elseif ($_GET['action'] == 'AddPost') {

            if (!empty($_POST['titleform']) && !empty($_POST['contentform'])) {
                AddPost( $_POST['titleform'], $_POST['contentform']);
                $postOk='Article ajouté !';
                echo '<script type="text/javascript">window.alert("'.$postOk.'");</script>';
                echo" <script>window.location='index.php?action=summary';</script>";
            }
            else {
              $error='Erreur : tous les champs ne sont pas remplis !';
              echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
              echo" <script>window.location='index.php?action=writepost';</script>";

            }
    }


    elseif ($_GET['action'] == 'delPost'){
        if (isset($_GET['id']) && $_GET['id'] > 0){

          delPost($_GET['id']);}
        else{
          echo 'Erreur : aucun identifiant de billet envoyé. Suppression impossible' ;}
    }

    elseif ($_GET['action'] == 'delReport'){
        if (isset($_GET['id']) && $_GET['id'] > 0){

          delReport($_GET['id']);}
        else{
          echo 'Erreur : aucun identifiant de signalement envoyé. Suppression impossible' ;}

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
    elseif ($_GET['action'] == 'listChapters') {
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
      listChapters($page);
    }
    elseif ($_GET['action'] == 'dashboard') {
      if (array_key_exists('connect',$_SESSION) && $_SESSION['connect'] == true)
      {
          dashboard();
      }
      else {
        header ('location:./index.php');
      }
    }

    elseif ($_GET['action'] == 'connect') {
      connect($_POST['password']);
    }

    elseif ($_GET['action'] == 'disconnect') {
      disconnect();
    }



    elseif ($_GET['action'] == 'writepost') {

      if (array_key_exists('connect',$_SESSION) && $_SESSION['connect'] == true)
      {
      writepost();

      }
      else {
        header ('location:./index.php');
      }
    }

    elseif ($_GET['action'] == 'summary') {
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
      summary($page);

    }
    elseif ($_GET['action'] == 'deletepost') {
      if (array_key_exists('connect',$_SESSION) && $_SESSION['connect'] == true)
      {
      deletepost();
      }
      else {
        header ('location:./index.php');
      }
    }



    elseif ($_GET['action'] == 'modifpost') {
      if (array_key_exists('connect',$_SESSION) && $_SESSION['connect'] == true)
      {
          if (isset($_GET['id']) && $_GET['id'] > 0) {
              modifpost();
          }
          else {
              echo 'Erreur : aucun identifiant de billet envoyé';
          }
      }
      else {
        header ('location:./index.php');
      }
    }

elseif ($_GET['action'] == 'savepost') {
  if (isset($_GET['id']) && isset($_POST['new_title']) && isset($_POST['new_content'])) {
      savepost($_GET['id'] , $_POST['new_title'] , $_POST['new_content']);
      $modifOk='Modifications effectués !';
      echo '<script type="text/javascript">window.alert("'.$modifOk.'");</script>';
      echo" <script>window.location='index.php?action=summary';</script>";
  }
  else {
      echo 'Erreur : aucun identifiant de billet envoyé';
  }

}

  elseif ($_GET['action'] == 'reportcom') {
    if (isset($_GET['id']) && $_GET['id'] > 0){
    reportcom($_GET['id'],$_GET['postID']);}
    else {
      echo'test';
    }
  }

    elseif ($_GET['action'] == 'summarycom') {
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
      summarycom($page);

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
