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

    public function recap($pagerecap)
    {
      $db = $this->dbConnect();
      $limitindex = $pagerecap*5;
      $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts ORDER BY title DESC LIMIT :index,10");
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

     public function modifPost($postContent)
      {
         $db = $this->dbConnect();
         $req= $db->prepare('UPDATE title, content FROM posts WHERE id=:id');
         $req->execute(array($postContent));
         $posts = $req->fetch();
         $postModel = new Posts();
         $postModel->hydrate($posts);
         echo $req->rowCount() . " Article mis à jour !";

         return $postModel;
       }
}
