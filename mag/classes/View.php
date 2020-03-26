
<?php
class View{
    public function render(){  
    }
    public function printRegister(){
    require_once "../mag/register.php";
    //echo "<h1>User Registration</h1>";
    /*require_once "../SOK/head.php";
   
    require_once "../SOK/regform.php"; 
    echo "</div>"; */
}
   
    public function printTitle($result){//esli public, to model.php dolzhen videtj
    echo "<div class='container'>";
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    echo "<h1>Categories</h1>";
    echo "<hr>";
    print_r($result);
    echo "</div>";
 

}
}