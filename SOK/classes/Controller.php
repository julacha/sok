<?php
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    
  private function postReq()
  {
    if (basename($_SERVER['PHP_SELF']) ==='register.php'){
   //echo "Processing register post";
   $this->model->addNewUser();
    return;
    }
 /*if (isset($_POST['addBtn'])) {
        $this->model->addTask();
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
       if (isset($_GET['id, title, parent_id, user_id'])) {
            $this->model->getCat($_GET['id, title, parent_id']);
      } else {
        $this->model->getCat();
      }
         if (isset($_GET['parent_id'])) 
            $this->model->outTree();
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