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

    function createTree($arr){
        $parents_arr = array();
        foreach($arr as $key=>$item){
            $parents_arr[$item['parent_id']][$item['id']]=$item;
        }
        $treeElem = $parents_arr[0];
        generateElemTree($treeElem,$parents_arr);
        return $treeElem;
    }
    function generateElemTree(&$treeElem,$parents_arr){
    foreach($treeElem as $key=>$item){
        if(!isset($item['children'])){
            $treeElem[$key]['children'] = array();
        }
        if(array_key_exists($key, $parents_arr)){
            $treeElem[$key]['children'] = $parents_arr[$key];
        }
    }
}
}
    public function printRegister(){
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    require_once "../SOK/regform.php"; 
}
}