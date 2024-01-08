<?php

class DB
{
    public object $dbh;
    public function __construct($dsn, $user, $pass)
    {
       return $this->dbh = new PDO($dsn, $user, $pass);
    }
    public function execute($title, $text, $author)
    {
        return $this->dbh->execute([':title' => $title, ':text' => $text, ':author' => $author]);
    }
}