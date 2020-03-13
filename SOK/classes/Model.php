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
        if ($this->getHash($_POST['username']) != 0){
      /*   $stmt = $this->conn->prepare("SELECT name FROM users
        WHERE (name = :name)
        ");
        $stmt->bindParam(':name',$_POST ['username']);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        //var_dump($result);
        if (count($result) > 0){ */
            ('Location: /register.php');
            //die("Got this user alredy");
            exit();
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

    public function getId($username){
        $stmt = $this->conn->prepare("SELECT id FROM users
        WHERE (name = :name)");
        $stmt->bindParam(':name',$username);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        if(count($result) > 0){
        return $result [0]['id'];
        } else{
        return 0;
        }

    }

    public function getHash($username){
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
        return 0;
        }
    }

public function get_cat(){
        //Task is received from database and displayed under the form
        $stmt = $this->conn->prepare ("SELECT id,title,parent_id FROM categories");
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        //var_dump($allRows);
        $this->view->printTitle($result);
        $arr=array();
        var_dump($result);
    
        

}
//When the user enters the task in the form, tasks are acceped and added to database
/* public function addTitle($title=null){
        $stmt = $this->conn->prepare ("INSERT INTO categories (title) VALUES (:title)");
        $stmt->bindParam(':title',$_POST ['title']);
        $stmt->execute();
        $this->view->printTitle();
        $this->getTitle();
} */
}


