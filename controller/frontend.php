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
        $posts = $postManager->recap(0);

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
  function recap($pagerecap)
  {
    $postManager = new PostManager();
    $posts = $postManager->recap($pagerecap);
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

 function recapcom($pagerecap)
 {
   $commentManager = new CommentManager();
   $comments = $commentManager->recapcom($pagerecap);
   require('view/frontend/admin/recapcom.php');
 }
  function delComment($deletecom)
   {
       $commentManager = new CommentManager();
       $commentManager->delComment($deletecom);
       $comments = $commentManager->recapcom(0);

       require('view/frontend/admin/recapcom.php');
   }
