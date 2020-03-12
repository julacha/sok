<?php

require_once "config.php";
require_once "classes/Model.php";
require_once "classes/View.php";
require_once "classes/Controller.php";

$view = new View();
$model = new Model($config,$view);
$controller = new Controller ($model);
//$controller->route();
