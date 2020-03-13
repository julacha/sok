<?php
class Model{  
    private $conn = null;
    private $view;
//connect to database
    public function __construct($config, View $view) {
        $this->view=$view;
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<hr>Connected Successfully!<hr>";
    
    }
    //ne rabotaet
    /*     public function getCat(){
        $this->view->printCat();
    } */
    public function getRegister(){
        $this->view->printRegister();
    }
     //When the user enters the task in the form, tasks are acceped and added to database
    public function addNewUser(){
        if (getHash($_POST['username']) === 0){
      /*   $stmt = $this->conn->prepare("SELECT name FROM users
        WHERE (name = :name)
        ");
        $stmt->bindParam(':name',$_POST ['username']);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        //var_dump($result);
        if (count($result) > 0){ */
            ('Location: /regform.php');
            //die("Got this user alredy");
            exit;
        }
  
        $stmt = $this->conn->prepare ("INSERT INTO `users`
        (`id`, `name`, `hash`, `created`) 
        VALUES (NULL, :name, :hash, current_timestamp())");
        $stmt->bindParam(':name',$_POST ['username']);
        $hash = password_hash($_POST['pw1'], PASSWORD_DEFAULT);
        $stmt->bindParam(':hash', $hash);
        $stmt->execute();
       //echo "Adding new user with the $hash";
       $this->view->printRegister();
    }

    public function hetHash($username){
        $stmt = $this->conn->prepare("SELECT hash FROM users
        WHERE (name = :name)");
        $stmt->bindParam(':name',$username);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        if(count($result) > 0){
      /*       var_dump($results);
            die("For now"); */
            return $result [0]['hash'];
        } else{
        return null;
        }
    }

     //When the user enters the task in the form, tasks are acceped and added to database
/*     public function addTask($task=null){
        $stmt = $this->conn->prepare ("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->bindParam(':task',$_POST ['task']);
        $stmt->execute();
        $this->view->printTasks();
        $this->getTask();
    } */


/*  public function getTask(){
        //Task is received from database and displayed under the form
        $stmt = $this->conn->prepare ("SELECT * FROM tasks");
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $allRows = $stmt->fetchAll();
        //var_dump($allRows);
        $this->view->printTasks($allRows);   
} /*

/* public function deleteTask(){
    $stmt = $this->conn->prepare("DELETE FROM tasks WHERE id = (:taskid)");
    $stmt->bindParam(':taskid',$_POST ['delBtn']);
    $stmt->execute();
    $this->getTask();
}

public function updateTask(){
    $stmt = $this->conn->prepare("UPDATE tasks SET task = (:taskname) WHERE id = (:taskid)");
    $stmt->bindParam(':taskid',$_POST ['updateBtn']);
    $stmt->bindParam(':taskname',$_POST ['task_update']);
    $stmt->execute();
    $this->getTask(); 
}  */
}

