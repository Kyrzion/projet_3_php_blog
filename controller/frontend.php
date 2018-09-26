<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

    function listPosts($page)
    {
        $postManager = new PostManager();
        $posts = $postManager->pagination($page);

        require('view/frontend/listPostsView.php');

    }

    function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        require('view/frontend/postView.php');
    }

    function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->postComment($postId, $author, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }


    function AddPost($secutitle,$secucontent)
    {

      $addpostManager = new PostManager();
      $addpostManager->insertPost($secutitle,$secucontent);

      require('view/frontend/admin/addpost.php');
    }

   function delPost($delete)
    {
        $postManager = new PostManager();
        $postManager->delPost($delete);
        $posts = $postManager->summary(0);

        require('view/frontend/admin/summary.php');
    }

/*class links {}*/

  function login()
  {
    require('view/frontend/login.php');
  }
  function listChapters()
  {
    $postManager = new PostManager();
    $posts = $postManager->listChapters($_GET['id']);
    require('view/frontend/listChapters.php');
  }
  function dashboard()
  {
    require('view/frontend/admin/dashboard.php');
  }
  function connect()
  {
    $toto_hash = password_hash("toto",PASSWORD_BCRYPT);
    if (password_verify($_POST["password"] ,$toto_hash)==true || $_SESSION['connect'] == true)
    {
    $_SESSION['connect'] = true;
    header ('location:./index.php?action=dashboard');
    }
    else {

    }
  }
  function summary($pagesummary)
  {
    $postManager = new PostManager();
    $posts = $postManager->summary($pagesummary);
    require('view/frontend/admin/summary.php');
  }
  function writepost()
  {
    require('view/frontend/admin/addpost.php');
  }

  function disconnect()
  {
    $_SESSION['connect'] = false;
    header ('location:./index.php');
  }
  function modifpost()
  {
    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);

    require('view/frontend/admin/modif.php');
  }

  function savepost($id,$new_title , $new_content)
  {
    $postManager = new PostManager();
    $postManager-> modifpost($id,$new_title,$new_content);

    $post = $postManager->getPost($id);
    require('view/frontend/admin/modif.php');
  }

/* Pagination */
 function pagination($page)
  {
    $postManager = new PostManager();
    $posts = $postManager->pagination($page);

    require('view/frontend/listPostsView.php');
  }

 function summarycom($pagesummary)
 {
   $commentManager = new CommentManager();
   $comments = $commentManager->summarycom($pagesummary);
   require('view/frontend/admin/summarycom.php');
 }
  function delComment($deletecom)
   {
       $commentManager = new CommentManager();
       $commentManager->delComment($deletecom);
       $comments = $commentManager->summarycom(0);
       require('view/frontend/admin/summarycom.php');
   }

   function delReport($deletereport)
    {
        $commentManager = new CommentManager();
        $commentManager->delReport($deletereport);
        $comments = $commentManager->summarycom(0);
        require('view/frontend/admin/summarycom.php');
    }

  function reportcom($reportComment,$postID)
    {
       $commentManager = new CommentManager();
       $postManager = new PostManager();
       $comments = $commentManager->getComments($postID);
       $commentManager->reportComment($reportComment);
       $post=$postManager->getPost($postID);
       require('view/frontend/postView.php');
    }

  function summaryreport($report)
    {
      $commentManager = new CommentManager();
      $comments = $commentManager->summaryreport($report);
      require('view/frontend/admin/summarycom.php');
    }
