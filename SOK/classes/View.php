<?php
class View{
    public function render(){  
    }
    public function printRegister(){
    echo "<h1>Register</h1><hr>";
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    require_once "../SOK/regform.php"; 
}
   
    public function printTitle($result){//esli public, to model.php dolzhen videtj
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    echo "<h1>Categories</h1><hr>";
    echo "<hr>";
    print_r($result);
    $return = array();
    foreach ($result as $value) { //Обходим массив
        $return[$value->parent_id][] = $value;
    }
    return $return;
} 

public function outTree($parent_id, $level) {
if (isset($this->_category_arr[$parent_id])) { //Если категория с таким parent_id существует
    foreach ($this->_category_arr[$parent_id] as $value) { //Обходим ее
        echo "<div style='margin-left:" . ($level * 25) . "px;'>" . $value->name . "</div>";
        $level++; 
        $this->outTree($value->id, $level);
        $level--; //Уменьшаем уровень вложености
    }
}
$this->view->printTitle();
}

}