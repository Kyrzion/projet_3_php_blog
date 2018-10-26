<?php
require_once("model/Manager.php");
require_once('model/Comments.php');
require_once('model/Report.php');

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

    public function summarycom($pagesummary)
    {
      $db = $this->dbConnect();
      $limitindex = $pagesummary*10;
      $req = $db->prepare("SELECT report.id AS reportID, DATE_FORMAT(report.report_date, '%d/%m/%Y à %Hh%imin') AS report_reportDate, comments.id, comments.comment, comments.author, DATE_FORMAT(comments.comment_date, '%d/%m/%Y à %Hh%imin') AS commentDate_fr FROM comments LEFT JOIN report ON report.comment_id = comments.id ORDER BY report.report_date DESC LIMIT :index,10");
      $req->bindParam(':index',$limitindex,PDO::PARAM_INT);
      $req->execute();
      $comments=array();
      while($dbComment=$req->fetch()){
        $commentModel = new Comments();
        $commentModel->hydrate($dbComment);
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

     public function delReport($reportID)
      {
         $db = $this->dbConnect();
         $deletereport = $db->prepare('DELETE FROM report WHERE id=:id');
         $deletereport->execute(array(':id' => $reportID));
      }

     public function reportComment($reportID)
     {
       $db = $this->dbConnect();
       $req = 'REPLACE INTO report SET comment_id=:id, report_date=now()';
       $query = $db->prepare($req);
       $query->bindParam(':id', $reportID);
       $query->execute(array(':id' => $reportID));
     }

}
