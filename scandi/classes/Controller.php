<?php
/*
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

  private function getReq()
    {
        if (isset($_GET['songname'])) {
            $this->model->getSongs($_GET['songname']);
        } else {
            $this->model->getSongs();
        }
    }

    private function postReq()
    {
         //echo "POST Request<hr>";
         //var_dump($_POST);
        $this->model->addSongs();
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
        
       if (isset($_GET['songname'])){
        $this->model->getSongs(($_GET['songname']));
    } else {
        $this->model->getSongs(); 
    }
    

    /* if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $this->getReq();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->postReq();
        }
 
    }
}
 
*/