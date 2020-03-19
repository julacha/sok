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


public function getCat(){
        //Task is received from database and displayed under the form
        $stmt = $this->conn->prepare ("SELECT id, title,parent_id, user_id FROM categories");
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result= $stmt->fetchAll();
        //print_r($result);
        $this->view->printTitle($result);
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
            $level--;
        }
    }
    $this->view->printTitle();
}
}




