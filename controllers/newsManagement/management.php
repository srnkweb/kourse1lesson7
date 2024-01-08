<?php

include_once __DIR__ . '/../../classes/View.php';
include_once __DIR__ . '/../../models/NewsManagement.php';
include_once __DIR__ . '/../../files/config.php';
$forMenu = '/newsAdministrationMenu.php';
$forForm = '/actionBlock.php';
$subContent = '/css/styles_structure/newsManagement/subContent.css';
$subFooter = '/css/styles_structure/newsManagement/subFooter.css';
$subHeader = '/css/styles_structure/newsManagement/subHeader.css';
$newsManagement = new NewsManagement();
$view = new View();
$newsManagement->setCssStyles($subContent, $subFooter, $subHeader);
$newsManagement->setContentForMenu($forMenu);
$newsManagement->setContentForForm($forForm);
$data = $newsManagement->getData();
$view->assign($data);
$test = $view->getData();
$view->display();