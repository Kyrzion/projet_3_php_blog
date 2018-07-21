<?php


require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date,'%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5 ");
        while($page = $posts->fetch(array(
          'page_test' => $pagetest
        )))
        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr FROM posts WHERE id = ?");
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
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
      return $req;
    }

    public function delPost($postID)
     {
        $db = $this->dbConnect();
        $delete = $db->prepare('DELETE FROM posts WHERE id=:id');
        $delete->execute(array(':id' => $postID));
     }
}
