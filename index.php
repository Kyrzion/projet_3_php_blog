
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
    elseif ($_GET['action'] == 'Addpost') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['titleform']) && !empty($_POST['contentform'])) {
                Addpost($_GET['id'], $_POST['title2'], $_POST['content2']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun ID de billet envoyé';
        }
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
      recap();
    }
    elseif ($_GET['action'] == 'deletepost') {
      deletepost();
    }

}
else {
    listPosts();
}
