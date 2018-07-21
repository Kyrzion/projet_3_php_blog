<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

/*class Post
{}*/
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

        require('view/frontend/admin/recap.php');
    }

/*class links {}*/

  function login()
  {
    require('view/frontend/form.php');
  }
  function dashboard()
  {
    require('view/frontend/admin/secret.php');
  }
  function recap()
  {
    require('view/frontend/admin/recap.php');
  }
  function writepost()
  {
    require('view/frontend/admin/addpost.php');
  }
  function deletepost()
  {
    require('view/frontend/admin/delete.php');
  }

/* Pagination */
 function pagination($page)
  {
    $postManager = new PostManager();
    $posts = $postManager->pagination($page);


    require('view/frontend/listPostsView.php');
  }
