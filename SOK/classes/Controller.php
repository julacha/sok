<?php
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    
  private function postReq()
  {
    if (basename($_SERVER['PHP_SELF']) ==='register.php'){
    echo "Processing register post";
    return;
    }
 /*if (isset($_POST['addBtn'])) {
        $this->model->addTask();
    } elseif (isset($_POST['delBtn'])){
        $this->model->deleteTask();
    } elseif (isset($_POST['updateBtn'])){
        $this->model->updateTask();
        //var_dump($_POST);
    }else {
        var_dump($_POST);
    }*/
} 

    private function getReq()
    {
        if (basename($_SERVER['PHP_SELF']) ==='register.php'){
            echo "Processing register get";
            $this->model->getRegister();
            return;
            }
    /*     if (isset($_GET['task'])) {
            $this->model->getTask($_GET['task']);
        } else {
            $this->model->getTask();
        } */
    } 

   public function route()
    {   
         //GETS are for retrieval only
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->getReq();
        }
        //POSTs are for changing something
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->postReq();
        }
}
}