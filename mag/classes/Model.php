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
    public function addNewUser(){
        //echo "Adding new user";
        //if ($this->getHash($_POST['username']) != 0){
      /*   $stmt = $this->conn->prepare("SELECT name FROM users
        WHERE (name = :name)
        ");
        $stmt->bindParam(':name',$_POST ['username']);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        //var_dump($result);
        if (count($result) > 0){ */
        header('Location: /');
            //die("Got this user alredy");
        exit();
    
  
        $stmt = $this->conn->prepare ("INSERT INTO `users`
        (`id`, `name`, `email`, `hash`) 
        VALUES (NULL, :name, :email, :hash)");
        $stmt->bindParam(':name',$_POST ['username']);
        $stmt->bindParam(':email',$_POST ['email']);
        $hash = password_hash($_POST['pw'], PASSWORD_DEFAULT);
        $stmt->bindParam(':hash', $hash);
        $stmt->execute();
       //echo "You are wellcome";
       //$this->view->printRegister();


 
   $this->conn->prepare("SELECT id FROM users
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
          var_dump($results);
            die("For now"); 
            return $result [0]['hash'];
        } else{
        return 0;
        }
    } 
}

