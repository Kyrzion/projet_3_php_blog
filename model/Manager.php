<?php

class Manager
{
    private $connection;
    protected function dbConnect()
    {
      if($this->connection == null) {
        $this->connection = new \PDO('mysql:host=localhost;dbname=projet_2;charset=utf8', 'root', '');
      }
        return $this->connection;
    }
}
