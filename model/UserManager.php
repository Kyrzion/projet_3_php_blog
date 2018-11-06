<?php
require_once("model/Manager.php");


class UserManager extends Manager
{
    public function log()
    {

      $db = $this->dbConnect();
      $req = $db->prepare('SELECT id, password FROM admin');
      $result = $req->execute();
      $result = $req->fetch();
      return $result;
    }
}
