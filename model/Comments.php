<?php class Comments
{
  private $_id;
  private $_postId;
  private $_author;
  private $_comment;
  private $_commentDate;

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
  function commentDate() { return $this->_commentDate; }

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

  function setComment_date_fr($commentDate)
  {
    $this->_commentDate = $commentDate;
  }

}
