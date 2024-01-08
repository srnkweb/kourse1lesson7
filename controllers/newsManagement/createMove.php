<?php
include_once __DIR__ . '/../../classes/DB.php';
include_once __DIR__ . '/../../classes/View.php';
include_once __DIR__ . '/../../models/NewsManagement.php';

$dsn  = include_once __DIR__ . '/../../files/config.php';
$user = 'root';
$pass = '';
$title = $_POST['title'];
$text = $_POST['text'];
$author = $_POST['author'];
$DB = new DB($dsn, $user, $pass);
var_dump($DB);
$sql = 'INSERT INTO news (title, text, author) VALUES (:title, :text, :author)';
$sth = $DB->dbh->prepare($sql);
$test = $sth->execute([':title' => $title, ':text' => $text, ':author' => $author]);
var_dump($test);



