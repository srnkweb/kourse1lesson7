<?php

include_once  __DIR__ . '/../classes/View.php';
include_once  __DIR__ . '/../models/Index.php';
include_once __DIR__ .'/../files/config.php';



$index = new Index();
$view = new View();

$data = $index->getData();
$view->assign($data);
//$test = $view->getData();

$view->display();


