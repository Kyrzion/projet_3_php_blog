<?php
class Posts
{
  private $_id;
  private $_title;
  private $_content;
  private $_creationDate;

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
 function title() { return $this->_title; }
 function content() { return $this->_content; }
 function creationDate() { return $this->_creationDate; }

 function setId($id)
  {
    $this->_id = (int) $id;
  }

 function setTitle($title)
  {
    // longueur est inférieure à 150 caractères.
    if (is_string($title) && strlen($title) <= 150)
    {
      $this->_title = $title;
    }
  }

 function setContent($content)
  {

    $this->_content = $content;
  }

 function setCreation_date_fr($creationDate)
  {
    $this->_creationDate = $creationDate;

  }
}
