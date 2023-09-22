<?php

require "./database/Database.php";

class User {

    private $pdo;


    public function __construct() {
        $this->pdo = new Database();
        $this->pdo->connect();
    }
    

    // properties
    public function register($email, $username, $password) {

        $sql = "INSERT INTO `users` (`email`, `username`, `password`) VALUES (?, ?, ?)";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$email, $username, $password]);

        $this->show("login");
    }

    public function getUserName ($username) {
        $sql = "SELECT username FROM users where username=?";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

    public function getEmail ($email) {
        $sql = "SELECT username FROM users where email=?";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    private function show ($page) {
        require_once "./views/$page.php";
    }
    
    

}