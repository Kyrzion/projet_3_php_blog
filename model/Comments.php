<?php class Comments
{
  private $_id;
  private $_postId;
  private $_author;
  private $_comment;
  private $_commentDate_fr;
  private $_reportID;
  private $_report_commentId;
  private $_report_reportDate;
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);

      // Si le setter correspondant existe.
      if (method_exists($this, $method))
      {
        // On appelle le setter.
        $this->$method($value);
      }
    }
  }

  function id() { return $this->_id; }
  function postId() { return $this->_postId; }
  function author() { return $this->_author; }
  function comment() { return $this->_comment; }
  function commentDate_fr() { return $this->_commentDate_fr; }
  function reportID() { return $this->_reportID; }
  function report_commentId() { return $this->_report_commentId; }
  function report_reportDate() { return $this->_report_reportDate; }

  function setId($id)
  {
    $this->_id = (int) $id;
  }

  function setPostId($postId)
  {
      $this->_postId = (int) $postId;
  }

  function setAuthor($author)
  {
    // longueur est inférieure à 50 caractères.
    if (is_string($author) && strlen($author) <= 50)
    {
      $this->_author = $author;
    }
  }

  function setComment($comment)
  {
    $this->_comment = $comment;
  }

  function setCommentDate_fr($commentDate_fr)
  {
    $this->_commentDate_fr = $commentDate_fr;
  }
  function setreportID($reportID)
  {
    $this->_reportID = (int) $reportID;
  }

  function setReport_commentId($report_commentId)
  {
    $this->_report_commentId = (int) $report_commentId;
  }

  function setReport_reportDate($report_reportDate)
  {
    $this->_report_reportDate = $report_reportDate;
  }
}
