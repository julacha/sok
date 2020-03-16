<?php
   require_once "../SOK/head.php";
   require_once "../SOK/header.php";

class View{
    public function render(){  
    }
   
    public function printTitle(){//esli public, to model.php dolzhen videtj
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    echo "<h1>Categories</h1><hr>";
    echo "<hr>";
}
    public function printRegister(){
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    require_once "../SOK/regform.php"; 
}
}