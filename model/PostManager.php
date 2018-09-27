<?php


require_once("model/Manager.php");
require_once('model/Posts.php');
require_once('model/Comments.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date,'%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5 ");
        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts WHERE id = ?");
        $req->execute(array($postId));
        $posts = $req->fetch();
        $postModel = new Posts();
        $postModel->hydrate($posts);
        return $postModel;
    }

    public function insertPost($secutitle,$secucontent)
    {
      $db = $this->dbConnect();
      $req = $db->prepare('INSERT INTO posts(title,content,creation_date) VALUES(:title2, :content2,now())');
      $req->execute(array(
        'title2' => $secutitle,
       'content2' => $secucontent));
    }

   public function pagination($indexpage)
    {
      $db = $this->dbConnect();
      $limitindex = $indexpage*5;
      $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date,'%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :index, 5 ");
      $req->bindParam(':index',$limitindex,PDO::PARAM_INT);
      $req->execute();
      $posts=array();
      while($dbPost=$req->fetch()){
        $postModel = new Posts();
        $postModel->hydrate($dbPost);
        $posts[]=$postModel;
      }
      return $posts;
    }

    public function summary($pagesummary)
    {
      $db = $this->dbConnect();
      $limitindex = $pagesummary*5;
      $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :index,10");
      $req->bindParam(':index',$limitindex,PDO::PARAM_INT);
      $req->execute();
      $posts=array();
      while($dbPost=$req->fetch()){
        $postModel = new Posts();
        $postModel->hydrate($dbPost);
        $posts[]=$postModel;
      }
      return $posts;
    }

    public function delPost($postID)
     {
        $db = $this->dbConnect();
        $delete = $db->prepare('DELETE FROM posts WHERE id=:id');
        $delete->execute(array(':id' => $postID));
     }

     public function modifPost($postID,$postTitle,$postContent)
      {
         $db = $this->dbConnect();
         $req= $db->prepare('UPDATE posts SET title=:title, content=:content WHERE id=:id');
         $req->bindParam(':title',$postTitle,PDO::PARAM_STR);
         $req->bindParam(':content',$postContent,PDO::PARAM_STR);
         $req->bindParam(':id',$postID,PDO::PARAM_INT);
         $req->execute();
       }

      public function listChapters($pagesummary)
      {
        $db = $this->dbConnect();
        $limitindex = $pagesummary*5;
        $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :index,15");
        $req->bindParam(':index',$limitindex,PDO::PARAM_INT);
        $req->execute();
        $posts=array();
        while($dbPost=$req->fetch()){
          $postModel = new Posts();
          $postModel->hydrate($dbPost);
          $posts[]=$postModel;
        }
        return $posts;
      }
}
