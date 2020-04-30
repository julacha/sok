<?php
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    
  private function postReq()
  {
    if (basename($_SERVER['PHP_SELF']) ==='register.php'){
   $this->model->addNewUser();
    return;
    }
} 

    private function getReq()
    {
        if (basename($_SERVER['PHP_SELF']) ==='register.php'){
            $this->model->getRegister();
            return;
            }
    }
        

   public function route()
    {   
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->getReq();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->postReq();
        }
}
}