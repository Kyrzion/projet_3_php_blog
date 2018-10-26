<?php
require_once("model/Manager.php");


class UserManager extends Manager
{
    public function log($result)
    {
      $db = $this->dbConnect();
      $req = $db->prepare('SELECT id, password FROM user WHERE password = :password');
      $req->execute(array(
        'password' => $password));
        $result = $req->fetch();

    }
}
