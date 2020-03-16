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
    var_dump($cat);
 /*    $arr_cat = array();
    if(rowCount($result) != 0) {
    
     //В цикле формируем массив
     for($i = 0; $i < rowCount($result);$i++) {
    $row = mysql_fetch_array($result,MYSQL_ASSOC);
    
    //Формируем массив, где ключами являются адишники на родительские категории
    if(empty($arr_cat[$row['parent_id']])) {
    $arr_cat[$row['parent_id']] = array();
    }
    $arr_cat[$row['parent_id']][] = $row;
     }
     //возвращаем массив
     return $arr_cat;
    } */
}
    public function printRegister(){
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    require_once "../SOK/regform.php"; 
}
}