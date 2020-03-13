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
/*         $areColumnSet = false;
        
        foreach ($songs as $index => $row){
            if (!$areColumnSet){
                echo "<div class='tracks-header-cont'>";
                foreach ($row as $colname => $cell){ 
                echo "<span class='col-fields'>$colname</span>";  
            }
            echo "</div>";
            $areColumnSet = true;
        }
            echo "<div class='tracks-cont'>";
            // echo "Row: $index";
            //print_r($index);
            foreach ($row as $colname => $cell){
                echo "<span class='track-cell'>$cell</span>";
            }
            echo "</div>";
        }*/
    }
    public function printRegister(){
    require_once "../SOK/head.php";
    require_once "../SOK/header.php";
    require_once "../SOK/regform.php"; 
}
}