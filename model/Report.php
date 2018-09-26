<?php class Report
{
  private $_report_id;
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

  function report_id() { return $this->_report_id; }
  function report_commentId() { return $this->_report_commentId; }
  function report_reportDate() { return $this->_report_reportDate; }

  function setReport_Id($id)
  {
    $this->_report_id = (int) $report_id;
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
