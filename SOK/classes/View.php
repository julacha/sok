<?php
class View{
    public function render(){  
    }
    public function printRegister(){
    require_once "../SOK/header.php";
    echo "<h1>User Registration</h1>";
    require_once "../SOK/head.php";
   
    require_once "../SOK/regform.php"; 
}
   
    public function printTitle($result){//esli public, to model.php dolzhen videtj
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    echo "<h1>Categories</h1>";
    echo "<hr>";
    print_r($result);

}
}