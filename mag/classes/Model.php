<?php
class Model{  
    private $conn = null;
    private $view;
    public function __construct($config, View $view) {
        $this->view=$view;
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getRegister(){
        $this->view->printRegister();
    }
    public function addNewUser(){
        if ($this->getHash($_POST['pw']) != 0){
       header('Location: /mag/index.html');
        exit();
        }
  
        $stmt = $this->conn->prepare ("INSERT INTO `users`
        (`id`, `name`, `email`, `hash`) 
        VALUES (NULL, :name, :email, :hash)");
        $stmt->bindParam(':name',$_POST ['username']);
        $stmt->bindParam(':email',$_POST ['email']);
        $hash = password_hash($_POST['pw'], PASSWORD_DEFAULT);
        $stmt->bindParam(':hash', $hash);
        $stmt->execute();
       echo "You are wellcome";
}

    public function getHash($username){
        $stmt = $this->conn->prepare("SELECT hash FROM users
        WHERE (name = :name)");
        $stmt->bindParam(':name',$username);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        if(count($result) > 0){
            return $result [0]['hash'];
        } else{
        return 0;
        }
    } 
}

