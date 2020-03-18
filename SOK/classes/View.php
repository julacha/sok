<?php
   require_once "../SOK/head.php";
   require_once "../SOK/header.php";

class View{
    public function render(){  
    }
   
    public function printTitle($cat){//esli public, to model.php dolzhen videtj
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    echo "<h1>Categories</h1><hr>";
    echo "<hr>";
    //var_dump($cat);

}
    public function printRegister(){
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    require_once "../SOK/regform.php"; 
}
}