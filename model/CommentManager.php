<?php
require_once("model/Manager.php");
require_once('model/Comments.php');

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare("SELECT id, author, comment, DATE_FORMAT(comment_date, '%d/%m/%Y à %Hh%imin') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC");
        $comments->execute(array($postId));
        $posts=array();
        while($dbComment=$comments->fetch()){
          $CommentsModel = new Comments();
          $CommentsModel->hydrate($dbComment);
          $posts[]=$CommentsModel;
        }
        return $posts;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));


        return $affectedLines;
    }

    public function recapcom($pagerecap)
    {
      $db = $this->dbConnect();
      $limitindex = $pagerecap*5;
      $req = $db->prepare("SELECT id, author, comment, DATE_FORMAT(comment_date, '%d/%m/%Y à %Hh%imin') AS comment_date_fr FROM comments ORDER BY id DESC LIMIT :index,10");
      $req->bindParam(':index',$limitindex,PDO::PARAM_INT);
      $req->execute();
      $comments=array();
      while($dbPost=$req->fetch()){
        $commentModel = new Comments();
        $commentModel->hydrate($dbPost);
        $comments[]=$commentModel;
      }
      return $comments;
    }

    public function delComment($commentID)
     {
        $db = $this->dbConnect();
        $deletecom = $db->prepare('DELETE FROM comments WHERE id=:id');
        $deletecom->execute(array(':id' => $commentID));
     }
}
