<?php

require_once "config.php";
require_once "classes/Model.php";
require_once "classes/View.php";
require_once "classes/Controller.php";

$view = new View();
$model = new Model($config,$view);
$controller = new Controller ($model);
//$controller->route();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //var_dump($_POST);
    $hash = $model->hetHash($_POST['username']);
    if(password_verify($_POST['pw'], $hash)){
        echo "You are good to go! Consider yourself logged in!";
    }else{
        echo "Not so good, eiher user or password is incorrect.";
    }
    //select name and hash from DB
    //password_verify user entry against the hash
}
